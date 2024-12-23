<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_Dispatcher_ActionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.dispatcher.action' shared service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Dispatcher\ActionDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.campaign.dispatcher.action'])) {
            return $container->services['mautic.campaign.dispatcher.action'];
        }
        $b = ($container->services['mautic.campaign.scheduler'] ?? $container->load('getMautic_Campaign_SchedulerService'));

        if (isset($container->services['mautic.campaign.dispatcher.action'])) {
            return $container->services['mautic.campaign.dispatcher.action'];
        }
        $c = ($container->services['mautic.campaign.legacy_event_dispatcher'] ?? $container->load('getMautic_Campaign_LegacyEventDispatcherService'));

        if (isset($container->services['mautic.campaign.dispatcher.action'])) {
            return $container->services['mautic.campaign.dispatcher.action'];
        }

        return $container->services['mautic.campaign.dispatcher.action'] = new \Mautic\CampaignBundle\Executioner\Dispatcher\ActionDispatcher($a, ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), $b, $c);
    }
}
