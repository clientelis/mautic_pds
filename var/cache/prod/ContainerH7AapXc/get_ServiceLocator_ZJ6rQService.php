<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZJ6rQService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.z__J6rQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z__J6rQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'membershipManager' => ['services', 'mautic.campaign.membership.manager', 'getMautic_Campaign_Membership_ManagerService', false],
        ], [
            'membershipManager' => '?',
        ]);
    }
}
