<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticFocusBundle\EventListener\PageSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\MauticFocusBundle\EventListener\PageSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['MauticPlugin\\MauticFocusBundle\\Model\\FocusModel'] ?? $container->getFocusModelService());

        if (isset($container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\PageSubscriber'])) {
            return $container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\PageSubscriber'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\PageSubscriber'])) {
            return $container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\PageSubscriber'];
        }
        $c = ($container->services['mautic.helper.token_builder.factory'] ?? $container->load('getMautic_Helper_TokenBuilder_FactoryService'));

        if (isset($container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\PageSubscriber'])) {
            return $container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\PageSubscriber'];
        }

        return $container->services['MauticPlugin\\MauticFocusBundle\\EventListener\\PageSubscriber'] = new \MauticPlugin\MauticFocusBundle\EventListener\PageSubscriber(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $a, $b, $c);
    }
}
