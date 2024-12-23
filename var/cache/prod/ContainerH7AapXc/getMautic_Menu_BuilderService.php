<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Menu_BuilderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.menu.builder' shared service.
     *
     * @return \Mautic\CoreBundle\Menu\MenuBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService'));

        if (isset($container->services['mautic.menu.builder'])) {
            return $container->services['mautic.menu.builder'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.menu.builder'])) {
            return $container->services['mautic.menu.builder'];
        }

        return $container->services['mautic.menu.builder'] = new \Mautic\CoreBundle\Menu\MenuBuilder($a, ($container->services['knp_menu.matcher'] ?? $container->getKnpMenu_MatcherService()), $b, ($container->services['mautic.helper.menu'] ?? $container->getMautic_Helper_MenuService()));
    }
}
