<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__9VpYUaService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator..9VpYUa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..9VpYUa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bundleHelper' => ['services', 'mautic.helper.bundle', 'getMautic_Helper_BundleService', false],
            'cacheHelper' => ['services', 'mautic.helper.cache', 'getMautic_Helper_CacheService', false],
            'configMapper' => ['services', 'Mautic\\ConfigBundle\\Mapper\\ConfigMapper', 'getConfigMapperService', true],
            'configurator' => ['services', 'mautic.configurator', 'getMautic_ConfiguratorService', false],
            'pathsHelper' => ['services', 'mautic.helper.paths', 'getMautic_Helper_PathsService', false],
            'tokenStorage' => ['services', '.container.private.security.token_storage', 'get_Container_Private_Security_TokenStorageService', false],
        ], [
            'bundleHelper' => '?',
            'cacheHelper' => '?',
            'configMapper' => 'Mautic\\ConfigBundle\\Mapper\\ConfigMapper',
            'configurator' => '?',
            'pathsHelper' => '?',
            'tokenStorage' => '?',
        ]);
    }
}
