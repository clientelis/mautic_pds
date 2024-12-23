<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8xOMdiFService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.8xOMdiF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8xOMdiF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', false],
        ], [
            'hasher' => '?',
        ]);
    }
}
