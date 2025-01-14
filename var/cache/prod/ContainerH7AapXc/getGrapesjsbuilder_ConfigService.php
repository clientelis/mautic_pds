<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGrapesjsbuilder_ConfigService extends AppKernelProdContainer
{
    /*
     * Gets the public 'grapesjsbuilder.config' shared service.
     *
     * @return \MauticPlugin\GrapesJsBuilderBundle\Integration\Config
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.integrations.helper'] ?? $container->getMautic_Integrations_HelperService());

        if (isset($container->services['grapesjsbuilder.config'])) {
            return $container->services['grapesjsbuilder.config'];
        }

        return $container->services['grapesjsbuilder.config'] = new \MauticPlugin\GrapesJsBuilderBundle\Integration\Config($a);
    }
}
