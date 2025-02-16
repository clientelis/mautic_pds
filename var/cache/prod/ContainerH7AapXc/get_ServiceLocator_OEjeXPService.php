<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OEjeXPService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.oEjeXP_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oEjeXP_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'trailingSlashHelper' => ['services', 'mautic.helper.trailing_slash', 'getMautic_Helper_TrailingSlashService', true],
        ], [
            'trailingSlashHelper' => '?',
        ]);
    }
}
