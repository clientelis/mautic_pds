<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportSettingsTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Form\Type\ReportSettingsType' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Form\Type\ReportSettingsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Form\\Type\\ReportSettingsType'] = new \Mautic\ReportBundle\Form\Type\ReportSettingsType();
    }
}
