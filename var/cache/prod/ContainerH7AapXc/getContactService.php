<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\IntegrationsBundle\Sync\SyncDataExchange\Internal\Object\Contact' shared autowired service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\SyncDataExchange\Internal\Object\Contact
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact'] = new \Mautic\IntegrationsBundle\Sync\SyncDataExchange\Internal\Object\Contact();
    }
}
