<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatsSubscriber12Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\EventListener\StatsSubscriber' shared autowired service.
     *
     * @return \Mautic\PointBundle\EventListener\StatsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PointBundle\\EventListener\\StatsSubscriber'] = new \Mautic\PointBundle\EventListener\StatsSubscriber(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()));
    }
}
