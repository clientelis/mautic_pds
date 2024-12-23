<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFeatureSettingsTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\Form\Type\FeatureSettingsType' shared autowired service.
     *
     * @return \Mautic\PluginBundle\Form\Type\FeatureSettingsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PluginBundle\\Form\\Type\\FeatureSettingsType'] = new \Mautic\PluginBundle\Form\Type\FeatureSettingsType(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
