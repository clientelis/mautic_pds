<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9EQ5wdvService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.9EQ5wdv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9EQ5wdv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'corePermissions' => ['services', 'mautic.security', 'getMautic_SecurityService', false],
            'themeHelper' => ['services', 'mautic.helper.theme', 'getMautic_Helper_ThemeService', false],
        ], [
            'corePermissions' => '?',
            'themeHelper' => '?',
        ]);
    }
}
