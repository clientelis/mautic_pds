<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardSubscriber3Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\EventListener\DashboardSubscriber' shared autowired service.
     *
     * @return \Mautic\CoreBundle\EventListener\DashboardSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? $container->getAuditLogModelService());

        if (isset($container->services['Mautic\\CoreBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\CoreBundle\\EventListener\\DashboardSubscriber'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\CoreBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\CoreBundle\\EventListener\\DashboardSubscriber'];
        }
        $c = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\CoreBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\CoreBundle\\EventListener\\DashboardSubscriber'];
        }
        $d = ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? $container->getModelFactoryService());

        if (isset($container->services['Mautic\\CoreBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\CoreBundle\\EventListener\\DashboardSubscriber'];
        }

        return $container->services['Mautic\\CoreBundle\\EventListener\\DashboardSubscriber'] = new \Mautic\CoreBundle\EventListener\DashboardSubscriber($a, ($container->services['translator'] ?? $container->getTranslator2Service()), $b, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $c, $d);
    }
}
