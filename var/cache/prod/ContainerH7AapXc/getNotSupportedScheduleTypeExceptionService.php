<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotSupportedScheduleTypeExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Scheduler\Exception\NotSupportedScheduleTypeException' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Scheduler\Exception\NotSupportedScheduleTypeException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException'] = new \Mautic\ReportBundle\Scheduler\Exception\NotSupportedScheduleTypeException();
    }
}