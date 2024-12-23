<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Report_Model_MessageScheduleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.report.model.message_schedule' shared service.
     *
     * @return \Mautic\ReportBundle\Scheduler\Model\MessageSchedule
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['mautic.report.model.message_schedule'])) {
            return $container->services['mautic.report.model.message_schedule'];
        }

        return $container->services['mautic.report.model.message_schedule'] = new \Mautic\ReportBundle\Scheduler\Model\MessageSchedule(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.helper.file_properties'] ?? ($container->services['mautic.helper.file_properties'] = new \Mautic\CoreBundle\Helper\FileProperties())), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), $a);
    }
}
