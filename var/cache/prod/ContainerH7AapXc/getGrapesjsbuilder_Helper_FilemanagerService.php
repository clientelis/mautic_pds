<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGrapesjsbuilder_Helper_FilemanagerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'grapesjsbuilder.helper.filemanager' shared service.
     *
     * @return \MauticPlugin\GrapesJsBuilderBundle\Helper\FileManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['grapesjsbuilder.helper.filemanager'] = new \MauticPlugin\GrapesJsBuilderBundle\Helper\FileManager(($container->services['mautic.helper.file_uploader'] ?? $container->getMautic_Helper_FileUploaderService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()));
    }
}
