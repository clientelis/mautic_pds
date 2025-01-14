<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignActionChangeMembershipSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\EventListener\CampaignActionChangeMembershipSubscriber' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\EventListener\CampaignActionChangeMembershipSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.campaign.membership.manager'] ?? $container->getMautic_Campaign_Membership_ManagerService());

        if (isset($container->services['Mautic\\CampaignBundle\\EventListener\\CampaignActionChangeMembershipSubscriber'])) {
            return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignActionChangeMembershipSubscriber'];
        }
        $b = ($container->services['Mautic\\CampaignBundle\\Model\\CampaignModel'] ?? $container->getCampaignModelService());

        if (isset($container->services['Mautic\\CampaignBundle\\EventListener\\CampaignActionChangeMembershipSubscriber'])) {
            return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignActionChangeMembershipSubscriber'];
        }

        return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignActionChangeMembershipSubscriber'] = new \Mautic\CampaignBundle\EventListener\CampaignActionChangeMembershipSubscriber($a, $b, ($container->services['Mautic\\CampaignBundle\\Form\\Validator\\Constraints\\InfiniteLoopValidator'] ?? ($container->services['Mautic\\CampaignBundle\\Form\\Validator\\Constraints\\InfiniteLoopValidator'] = new \Mautic\CampaignBundle\Form\Validator\Constraints\InfiniteLoopValidator())));
    }
}
