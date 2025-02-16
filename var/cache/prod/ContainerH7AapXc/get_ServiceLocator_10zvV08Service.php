<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_10zvV08Service extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.10zvV08' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.10zvV08'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'client' => ['services', 'mautic.webhook.http.client', 'getMautic_Webhook_Http_ClientService', true],
        ], [
            'client' => '?',
        ]);
    }
}
