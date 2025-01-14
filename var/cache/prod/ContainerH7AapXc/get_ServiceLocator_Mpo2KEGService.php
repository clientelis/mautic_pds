<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mpo2KEGService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.Mpo2KEG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Mpo2KEG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fileManager' => ['services', 'grapesjsbuilder.helper.filemanager', 'getGrapesjsbuilder_Helper_FilemanagerService', true],
        ], [
            'fileManager' => '?',
        ]);
    }
}
