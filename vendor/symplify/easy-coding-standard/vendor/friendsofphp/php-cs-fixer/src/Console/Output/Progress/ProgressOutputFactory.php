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
namespace PhpCsFixer\Console\Output\Progress;

use PhpCsFixer\Console\Output\OutputContext;
/**
 * @internal
 */
final class ProgressOutputFactory
{
    public function create(string $outputType, OutputContext $context) : \PhpCsFixer\Console\Output\Progress\ProgressOutputInterface
    {
        if (null === $context->getOutput()) {
            $outputType = \PhpCsFixer\Console\Output\Progress\ProgressOutputType::NONE;
        }
        if (!$this->isBuiltInType($outputType)) {
            throw new \InvalidArgumentException(\sprintf('Something went wrong, "%s" output type is not supported', $outputType));
        }
        return \PhpCsFixer\Console\Output\Progress\ProgressOutputType::NONE === $outputType ? new \PhpCsFixer\Console\Output\Progress\NullOutput() : new \PhpCsFixer\Console\Output\Progress\DotsOutput($context);
    }
    private function isBuiltInType(string $outputType) : bool
    {
        return \in_array($outputType, [\PhpCsFixer\Console\Output\Progress\ProgressOutputType::NONE, \PhpCsFixer\Console\Output\Progress\ProgressOutputType::DOTS], \true);
    }
}
