<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WGi5KwkService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.wGi5Kwk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wGi5Kwk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'builderIntegrationsHelper' => ['services', 'mautic.integrations.helper.builder_integrations', 'getMautic_Integrations_Helper_BuilderIntegrationsService', false],
            'themeHelper' => ['services', 'mautic.helper.theme', 'getMautic_Helper_ThemeService', false],
        ], [
            'builderIntegrationsHelper' => '?',
            'themeHelper' => '?',
        ]);
    }
}
