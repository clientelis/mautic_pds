<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScheduledExecutionerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Executioner\ScheduledExecutioner' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Executioner\ScheduledExecutioner
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Executioner\\ScheduledExecutioner'] = new \Mautic\CampaignBundle\Executioner\ScheduledExecutioner(($container->services['Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository'] ?? $container->getLeadEventLogRepositoryService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.campaign.event_executioner'] ?? $container->load('getMautic_Campaign_EventExecutionerService')), ($container->services['mautic.campaign.scheduler'] ?? $container->load('getMautic_Campaign_SchedulerService')), ($container->services['mautic.campaign.contact_finder.scheduled'] ?? $container->load('getMautic_Campaign_ContactFinder_ScheduledService')));
    }
}
