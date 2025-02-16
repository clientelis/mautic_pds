<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignDeleteEventLogsCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Command\CampaignDeleteEventLogsCommand' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Command\CampaignDeleteEventLogsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Command\\CampaignDeleteEventLogsCommand'] = new \Mautic\CampaignBundle\Command\CampaignDeleteEventLogsCommand(($container->services['Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository'] ?? $container->getLeadEventLogRepositoryService()), ($container->services['Mautic\\CampaignBundle\\Model\\CampaignModel'] ?? $container->getCampaignModelService()), ($container->services['Mautic\\CampaignBundle\\Model\\EventModel'] ?? $container->load('getEventModelService')));
    }
}
