<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Dashboard_WidgetService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.dashboard.widget' shared service.
     *
     * @return \Mautic\DashboardBundle\Dashboard\Widget
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\DashboardBundle\\Model\\DashboardModel'] ?? $container->load('getDashboardModelService'));

        if (isset($container->services['mautic.dashboard.widget'])) {
            return $container->services['mautic.dashboard.widget'];
        }

        return $container->services['mautic.dashboard.widget'] = new \Mautic\DashboardBundle\Dashboard\Widget($a, ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
    }
}
