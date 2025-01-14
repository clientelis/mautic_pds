<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XlJagqMService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.XlJagqM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XlJagqM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ipServiceFactory' => ['services', 'mautic.ip_lookup.factory', 'getMautic_IpLookup_FactoryService', false],
        ], [
            'ipServiceFactory' => '?',
        ]);
    }
}
