<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_Dispatcher_DecisionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.dispatcher.decision' shared service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Dispatcher\DecisionDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.campaign.dispatcher.decision'])) {
            return $container->services['mautic.campaign.dispatcher.decision'];
        }
        $b = ($container->services['mautic.campaign.legacy_event_dispatcher'] ?? $container->load('getMautic_Campaign_LegacyEventDispatcherService'));

        if (isset($container->services['mautic.campaign.dispatcher.decision'])) {
            return $container->services['mautic.campaign.dispatcher.decision'];
        }

        return $container->services['mautic.campaign.dispatcher.decision'] = new \Mautic\CampaignBundle\Executioner\Dispatcher\DecisionDispatcher($a, $b);
    }
}
