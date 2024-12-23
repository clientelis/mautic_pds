<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportFileWriterService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Model\ReportFileWriter' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Model\ReportFileWriter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Model\\ReportFileWriter'] = new \Mautic\ReportBundle\Model\ReportFileWriter(($container->services['Mautic\\ReportBundle\\Model\\CsvExporter'] ?? $container->load('getCsvExporterService')), ($container->services['Mautic\\ReportBundle\\Model\\ExportHandler'] ?? $container->load('getExportHandlerService')));
    }
}
