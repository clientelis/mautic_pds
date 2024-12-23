<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_Scheduler_IntervalService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.scheduler.interval' shared service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Scheduler\Mode\Interval
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.campaign.scheduler.interval'] = new \Mautic\CampaignBundle\Executioner\Scheduler\Mode\Interval(($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
