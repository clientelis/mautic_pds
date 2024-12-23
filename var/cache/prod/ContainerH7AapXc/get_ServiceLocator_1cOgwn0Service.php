<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1cOgwn0Service extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.1cOgwn0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1cOgwn0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cookieHelper' => ['services', 'mautic.helper.cookie', 'getMautic_Helper_CookieService', false],
        ], [
            'cookieHelper' => '?',
        ]);
    }
}