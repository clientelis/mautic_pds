<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Helper_TokenBuilderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.helper.token_builder' shared service.
     *
     * @return \Mautic\CoreBundle\Helper\BuilderTokenHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.helper.token_builder'] = new \Mautic\CoreBundle\Helper\BuilderTokenHelper(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? $container->getModelFactoryService()), ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()));
    }
}
