<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExportHandlerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Model\ExportHandler' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Model\ExportHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Model\\ExportHandler'] = new \Mautic\ReportBundle\Model\ExportHandler(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['mautic.helper.file_path_resolver'] ?? $container->getMautic_Helper_FilePathResolverService()));
    }
}