<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignAuditServiceService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Service\CampaignAuditService' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Service\CampaignAuditService
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.core.service.flashbag'] ?? $container->getMautic_Core_Service_FlashbagService());

        if (isset($container->services['Mautic\\CampaignBundle\\Service\\CampaignAuditService'])) {
            return $container->services['Mautic\\CampaignBundle\\Service\\CampaignAuditService'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\CampaignBundle\\Service\\CampaignAuditService'])) {
            return $container->services['Mautic\\CampaignBundle\\Service\\CampaignAuditService'];
        }

        return $container->services['Mautic\\CampaignBundle\\Service\\CampaignAuditService'] = new \Mautic\CampaignBundle\Service\CampaignAuditService($a, $b, ($container->services['Mautic\\CampaignBundle\\Entity\\CampaignRepository'] ?? $container->load('getCampaignRepositoryService')), ($container->services['Mautic\\EmailBundle\\Entity\\EmailRepository'] ?? $container->load('getEmailRepositoryService')));
    }
}