<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSummaryRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Entity\SummaryRepository' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Entity\SummaryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Entity\\SummaryRepository'] = new \Mautic\CampaignBundle\Entity\SummaryRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
