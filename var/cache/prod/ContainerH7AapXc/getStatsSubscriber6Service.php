<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatsSubscriber6Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\DynamicContentBundle\EventListener\StatsSubscriber' shared autowired service.
     *
     * @return \Mautic\DynamicContentBundle\EventListener\StatsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\DynamicContentBundle\\EventListener\\StatsSubscriber'] = new \Mautic\DynamicContentBundle\EventListener\StatsSubscriber(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()));
    }
}
