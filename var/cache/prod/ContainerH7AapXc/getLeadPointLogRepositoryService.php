<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadPointLogRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\Entity\LeadPointLogRepository' shared autowired service.
     *
     * @return \Mautic\PointBundle\Entity\LeadPointLogRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PointBundle\\Entity\\LeadPointLogRepository'] = new \Mautic\PointBundle\Entity\LeadPointLogRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
