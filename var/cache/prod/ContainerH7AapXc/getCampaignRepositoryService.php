<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Entity\CampaignRepository' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Entity\CampaignRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Entity\\CampaignRepository'] = new \Mautic\CampaignBundle\Entity\CampaignRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
