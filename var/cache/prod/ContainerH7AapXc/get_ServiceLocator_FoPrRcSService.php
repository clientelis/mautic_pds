<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FoPrRcSService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.foPrRcS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.foPrRcS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'viewhandler' => ['services', 'fos_rest.view_handler', 'getFosRest_ViewHandlerService', true],
        ], [
            'viewhandler' => '?',
        ]);
    }
}
