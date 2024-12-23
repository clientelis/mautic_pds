<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetsSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\GrapesJsBuilderBundle\EventSubscriber\AssetsSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\GrapesJsBuilderBundle\EventSubscriber\AssetsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.install.service'] ?? $container->getMautic_Install_ServiceService());

        if (isset($container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\AssetsSubscriber'])) {
            return $container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\AssetsSubscriber'];
        }

        return $container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\AssetsSubscriber'] = new \MauticPlugin\GrapesJsBuilderBundle\EventSubscriber\AssetsSubscriber(($container->services['grapesjsbuilder.config'] ?? $container->load('getGrapesjsbuilder_ConfigService')), $a, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
