<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\Fixer\Import;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolver;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolverInterface;
use PhpCsFixer\FixerConfiguration\FixerOptionBuilder;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Analyzer\Analysis\TypeAnalysis;
use PhpCsFixer\Tokenizer\Analyzer\FunctionsAnalyzer;
use PhpCsFixer\Tokenizer\Analyzer\NamespaceUsesAnalyzer;
use PhpCsFixer\Tokenizer\CT;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
/**
 * @author VeeWee <toonverwerft@gmail.com>
 */
final class FullyQualifiedStrictTypesFixer extends AbstractFixer implements ConfigurableFixerInterface
{
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('Transforms imported FQCN parameters and return types in function arguments to short version.', [new CodeSample('<?php

use Foo\\Bar;
use Foo\\Bar\\Baz;

class SomeClass
{
    public function doX(\\Foo\\Bar $foo): \\Foo\\Bar\\Baz
    {
    }

    public function doY(Foo\\NotImported $u, \\Foo\\NotImported $v)
    {
    }
}
'), new CodeSample('<?php

class SomeClass
{
    public function doY(Foo\\NotImported $u, \\Foo\\NotImported $v)
    {
    }
}
', ['leading_backslash_in_global_namespace' => \true])]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run before NoSuperfluousPhpdocTagsFixer.
     * Must run after PhpdocToReturnTypeFixer.
     */
    public function getPriority() : int
    {
        return 7;
    }
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isTokenKindFound(\T_FUNCTION);
    }
    protected function createConfigurationDefinition() : FixerConfigurationResolverInterface
    {
        return new FixerConfigurationResolver([(new FixerOptionBuilder('leading_backslash_in_global_namespace', 'Whether FQCN is prefixed with backslash when that FQCN is used in global namespace context.'))->setAllowedTypes(['bool'])->setDefault(\false)->getOption()]);
    }
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        $namespaceUsesAnalyzer = new NamespaceUsesAnalyzer();
        $functionsAnalyzer = new FunctionsAnalyzer();
        foreach ($tokens->getNamespaceDeclarations() as $namespace) {
            $namespaceName = \strtolower($namespace->getFullName());
            $uses = [];
            foreach ($namespaceUsesAnalyzer->getDeclarationsInNamespace($tokens, $namespace) as $use) {
                $uses[\strtolower(\ltrim($use->getFullName(), '\\'))] = $use->getShortName();
            }
            for ($index = $namespace->getScopeStartIndex(); $index < $namespace->getScopeEndIndex(); ++$index) {
                if ($tokens[$index]->isGivenKind(\T_FUNCTION)) {
                    $this->fixFunction($functionsAnalyzer, $tokens, $index, $uses, $namespaceName);
                }
            }
        }
    }
    /**
     * @param array<string, string> $uses
     */
    private function fixFunction(FunctionsAnalyzer $functionsAnalyzer, Tokens $tokens, int $index, array $uses, string $namespaceName) : void
    {
        $arguments = $functionsAnalyzer->getFunctionArguments($tokens, $index);
        foreach ($arguments as $i => $argument) {
            $argument = $functionsAnalyzer->getFunctionArguments($tokens, $index)[$i];
            if ($argument->hasTypeAnalysis()) {
                $this->replaceByShortType($tokens, $argument->getTypeAnalysis(), $uses, $namespaceName);
            }
        }
        $returnTypeAnalysis = $functionsAnalyzer->getFunctionReturnType($tokens, $index);
        if (null !== $returnTypeAnalysis) {
            $this->replaceByShortType($tokens, $returnTypeAnalysis, $uses, $namespaceName);
        }
    }
    /**
     * @param array<string, string> $uses
     */
    private function replaceByShortType(Tokens $tokens, TypeAnalysis $type, array $uses, string $namespaceName) : void
    {
        $typeStartIndex = $type->getStartIndex();
        if ($tokens[$typeStartIndex]->isGivenKind(CT::T_NULLABLE_TYPE)) {
            $typeStartIndex = $tokens->getNextMeaningfulToken($typeStartIndex);
        }
        $namespaceNameLength = \strlen($namespaceName);
        $types = $this->getTypes($tokens, $typeStartIndex, $type->getEndIndex());
        foreach ($types as $typeName => [$startIndex, $endIndex]) {
            if ((new TypeAnalysis($typeName))->isReservedType()) {
                return;
            }
            $withLeadingBackslash = \strncmp($typeName, '\\', \strlen('\\')) === 0;
            if ($withLeadingBackslash) {
                $typeName = \substr($typeName, 1);
            }
            $typeNameLower = \strtolower($typeName);
            if (isset($uses[$typeNameLower]) && ($withLeadingBackslash || '' === $namespaceName)) {
                // if the type without leading "\" equals any of the full "uses" long names, it can be replaced with the short one
                $tokens->overrideRange($startIndex, $endIndex, $this->namespacedStringToTokens($uses[$typeNameLower]));
                continue;
            }
            if ('' === $namespaceName) {
                foreach ($uses as $useShortName) {
                    if (\strtolower($useShortName) === $typeNameLower) {
                        continue 2;
                    }
                }
                // if we are in the global namespace and the type is not imported,
                // we enforce/remove leading backslash (depending on the configuration)
                if (\true === $this->configuration['leading_backslash_in_global_namespace']) {
                    if (!$withLeadingBackslash && !isset($uses[$typeNameLower])) {
                        $tokens->overrideRange($startIndex, $endIndex, $this->namespacedStringToTokens($typeName, \true));
                    }
                } else {
                    $tokens->overrideRange($startIndex, $endIndex, $this->namespacedStringToTokens($typeName));
                }
            } elseif (\strpos($typeName, '\\') === \false) {
                // If we're NOT in the global namespace, there's no related import,
                // AND used type is from global namespace, then it can't be shortened.
                continue;
            } elseif ($typeNameLower !== $namespaceName && \strncmp($typeNameLower, $namespaceName . '\\', \strlen($namespaceName . '\\')) === 0) {
                // if the type starts with namespace and the type is not the same as the namespace it can be shortened
                $typeNameShort = \substr($typeName, $namespaceNameLength + 1);
                // if short names are the same, but long one are different then it cannot be shortened
                foreach ($uses as $useLongName => $useShortName) {
                    if (\strtolower($typeNameShort) === \strtolower($useShortName) && \strtolower($typeName) !== \strtolower($useLongName)) {
                        continue 2;
                    }
                }
                $tokens->overrideRange($startIndex, $endIndex, $this->namespacedStringToTokens($typeNameShort));
            }
        }
    }
    /**
     * @return iterable<string, array{int, int}>
     */
    private function getTypes(Tokens $tokens, int $index, int $endIndex) : iterable
    {
        $skipNextYield = \false;
        $typeStartIndex = $typeEndIndex = null;
        $type = null;
        while (\true) {
            if ($tokens[$index]->isGivenKind(CT::T_DISJUNCTIVE_NORMAL_FORM_TYPE_PARENTHESIS_OPEN)) {
                $index = $tokens->getNextMeaningfulToken($index);
                $typeStartIndex = $typeEndIndex = null;
                $type = null;
                continue;
            }
            if ($tokens[$index]->isGivenKind([CT::T_TYPE_ALTERNATION, CT::T_TYPE_INTERSECTION, CT::T_DISJUNCTIVE_NORMAL_FORM_TYPE_PARENTHESIS_CLOSE]) || $index > $endIndex) {
                if (!$skipNextYield && null !== $typeStartIndex) {
                    $origCount = \count($tokens);
                    (yield $type => [$typeStartIndex, $typeEndIndex]);
                    $endIndex += \count($tokens) - $origCount;
                    // type tokens were possibly updated, restart type match
                    $skipNextYield = \true;
                    $index = $typeEndIndex = $typeStartIndex;
                    $type = null;
                } else {
                    $skipNextYield = \false;
                    $index = $tokens->getNextMeaningfulToken($index);
                    $typeStartIndex = $typeEndIndex = null;
                    $type = null;
                }
                if ($index > $endIndex) {
                    break;
                }
                continue;
            }
            if (null === $typeStartIndex) {
                $typeStartIndex = $index;
                $type = '';
            }
            $typeEndIndex = $index;
            $type .= $tokens[$index]->getContent();
            $index = $tokens->getNextMeaningfulToken($index);
        }
    }
    /**
     * @return Token[]
     */
    private function namespacedStringToTokens(string $input, bool $withLeadingBackslash = \false) : array
    {
        $tokens = [];
        if ($withLeadingBackslash) {
            $tokens[] = new Token([\T_NS_SEPARATOR, '\\']);
        }
        $parts = \explode('\\', $input);
        foreach ($parts as $index => $part) {
            $tokens[] = new Token([\T_STRING, $part]);
            if ($index !== \count($parts) - 1) {
                $tokens[] = new Token([\T_NS_SEPARATOR, '\\']);
            }
        }
        return $tokens;
    }
}
