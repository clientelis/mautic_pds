<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\Entity\PointRepository' shared autowired service.
     *
     * @return \Mautic\PointBundle\Entity\PointRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PointBundle\\Entity\\PointRepository'] = new \Mautic\PointBundle\Entity\PointRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
