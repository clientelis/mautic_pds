<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Me4P0wRService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.Me4P0wR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Me4P0wR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
            'mauticLogger' => ['services', 'monolog.logger.mautic', 'getMonolog_Logger_MauticService', false],
        ], [
            'kernel' => '?',
            'mauticLogger' => '?',
        ]);
    }
}
