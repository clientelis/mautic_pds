<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWidgetDetailEventFactoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\DashboardBundle\Factory\WidgetDetailEventFactory' shared autowired service.
     *
     * @return \Mautic\DashboardBundle\Factory\WidgetDetailEventFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\DashboardBundle\\Factory\\WidgetDetailEventFactory'] = new \Mautic\DashboardBundle\Factory\WidgetDetailEventFactory(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.cache.provider'] ?? $container->getMautic_Cache_ProviderService()), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()));
    }
}
