<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchedulerDailyBuilderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Scheduler\Builder\SchedulerDailyBuilder' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Scheduler\Builder\SchedulerDailyBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerDailyBuilder'] = new \Mautic\ReportBundle\Scheduler\Builder\SchedulerDailyBuilder();
    }
}
