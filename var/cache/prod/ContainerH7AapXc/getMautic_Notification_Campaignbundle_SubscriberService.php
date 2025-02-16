<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Notification_Campaignbundle_SubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.notification.campaignbundle.subscriber' shared service.
     *
     * @return \Mautic\NotificationBundle\EventListener\CampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['mautic.notification.campaignbundle.subscriber'])) {
            return $container->services['mautic.notification.campaignbundle.subscriber'];
        }
        $b = ($container->services['Mautic\\NotificationBundle\\Model\\NotificationModel'] ?? $container->load('getNotificationModel2Service'));

        if (isset($container->services['mautic.notification.campaignbundle.subscriber'])) {
            return $container->services['mautic.notification.campaignbundle.subscriber'];
        }
        $c = ($container->services['mautic.notification.api'] ?? $container->load('getMautic_Notification_ApiService'));

        if (isset($container->services['mautic.notification.campaignbundle.subscriber'])) {
            return $container->services['mautic.notification.campaignbundle.subscriber'];
        }
        $d = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.notification.campaignbundle.subscriber'])) {
            return $container->services['mautic.notification.campaignbundle.subscriber'];
        }

        return $container->services['mautic.notification.campaignbundle.subscriber'] = new \Mautic\NotificationBundle\EventListener\CampaignSubscriber($a, $b, $c, $d, ($container->services['Mautic\\LeadBundle\\Model\\DoNotContact'] ?? $container->getDoNotContactService()), ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
