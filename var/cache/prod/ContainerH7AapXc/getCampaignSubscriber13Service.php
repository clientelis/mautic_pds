<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignSubscriber13Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\WebhookBundle\EventListener\CampaignSubscriber' shared autowired service.
     *
     * @return \Mautic\WebhookBundle\EventListener\CampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.webhook.campaign.helper'] ?? $container->load('getMautic_Webhook_Campaign_HelperService'));

        if (isset($container->services['Mautic\\WebhookBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\WebhookBundle\\EventListener\\CampaignSubscriber'];
        }

        return $container->services['Mautic\\WebhookBundle\\EventListener\\CampaignSubscriber'] = new \Mautic\WebhookBundle\EventListener\CampaignSubscriber($a);
    }
}
