<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_Service_CampaignService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.service.campaign' shared service.
     *
     * @return \Mautic\CampaignBundle\Service\Campaign
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.campaign.service.campaign'] = new \Mautic\CampaignBundle\Service\Campaign(($container->services['Mautic\\CampaignBundle\\Entity\\CampaignRepository'] ?? $container->load('getCampaignRepositoryService')), ($container->services['Mautic\\EmailBundle\\Entity\\EmailRepository'] ?? $container->load('getEmailRepositoryService')));
    }
}
