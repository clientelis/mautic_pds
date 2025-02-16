<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTimelineEventLogCampaignSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\TimelineEventLogCampaignSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\TimelineEventLogCampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\EventListener\\TimelineEventLogCampaignSubscriber'] = new \Mautic\LeadBundle\EventListener\TimelineEventLogCampaignSubscriber(($container->services['Mautic\\LeadBundle\\Entity\\LeadEventLogRepository'] ?? $container->load('getLeadEventLogRepository2Service')), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()));
    }
}
