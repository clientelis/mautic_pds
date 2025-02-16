<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getButtonSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticFullContactBundle\EventListener\ButtonSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\MauticFullContactBundle\EventListener\ButtonSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['MauticPlugin\\MauticFullContactBundle\\EventListener\\ButtonSubscriber'])) {
            return $container->services['MauticPlugin\\MauticFullContactBundle\\EventListener\\ButtonSubscriber'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['MauticPlugin\\MauticFullContactBundle\\EventListener\\ButtonSubscriber'])) {
            return $container->services['MauticPlugin\\MauticFullContactBundle\\EventListener\\ButtonSubscriber'];
        }

        return $container->services['MauticPlugin\\MauticFullContactBundle\\EventListener\\ButtonSubscriber'] = new \MauticPlugin\MauticFullContactBundle\EventListener\ButtonSubscriber($a, ($container->services['translator'] ?? $container->getTranslator2Service()), $b);
    }
}
