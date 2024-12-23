<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Security_UserTokenSetterService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.security.user_token_setter' shared service.
     *
     * @return \Mautic\UserBundle\Security\UserTokenSetter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.security.user_token_setter'] = new \Mautic\UserBundle\Security\UserTokenSetter(($container->services['Mautic\\UserBundle\\Entity\\UserRepository'] ?? $container->getUserRepositoryService()), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}
