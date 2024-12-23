<?php declare(strict_types = 1);

namespace PHPStan\ExtensionInstaller;

/**
 * This class is generated by phpstan/extension-installer.
 * @internal
 */
final class GeneratedConfig
{

	public const EXTENSIONS = array (
  'composer/composer' => 
  array (
    'install_path' => '/home/mya/Downloads/106_mautic-5211/vendor/composer/composer',
    'relative_install_path' => '../../../composer/composer',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'phpstan/rules.neon',
      ),
    ),
    'version' => '2.7.7',
  ),
  'phpstan/phpstan-deprecation-rules' => 
  array (
    'install_path' => '/home/mya/Downloads/106_mautic-5211/vendor/phpstan/phpstan-deprecation-rules',
    'relative_install_path' => '../../phpstan-deprecation-rules',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'rules.neon',
      ),
    ),
    'version' => '1.1.3',
  ),
  'phpstan/phpstan-doctrine' => 
  array (
    'install_path' => '/home/mya/Downloads/106_mautic-5211/vendor/phpstan/phpstan-doctrine',
    'relative_install_path' => '../../phpstan-doctrine',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
        1 => 'rules.neon',
      ),
    ),
    'version' => '1.3.40',
  ),
  'phpstan/phpstan-phpunit' => 
  array (
    'install_path' => '/home/mya/Downloads/106_mautic-5211/vendor/phpstan/phpstan-phpunit',
    'relative_install_path' => '../../phpstan-phpunit',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
        1 => 'rules.neon',
      ),
    ),
    'version' => '1.3.13',
  ),
  'phpstan/phpstan-symfony' => 
  array (
    'install_path' => '/home/mya/Downloads/106_mautic-5211/vendor/phpstan/phpstan-symfony',
    'relative_install_path' => '../../phpstan-symfony',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
        1 => 'rules.neon',
      ),
    ),
    'version' => '1.3.2',
  ),
);

	public const NOT_INSTALLED = array (
);

	private function __construct()
	{
	}

}