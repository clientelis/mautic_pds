<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarketplace_PermissionsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'marketplace.permissions' shared service.
     *
     * @return \Mautic\MarketplaceBundle\Security\Permissions\MarketplacePermissions
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['marketplace.permissions'] = new \Mautic\MarketplaceBundle\Security\Permissions\MarketplacePermissions(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['marketplace.service.config'] ?? $container->getMarketplace_Service_ConfigService()));
    }
}
