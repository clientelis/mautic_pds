<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointSubscriber8Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\EventListener\PointSubscriber' shared autowired service.
     *
     * @return \Mautic\PointBundle\EventListener\PointSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? $container->getAuditLogModelService());

        if (isset($container->services['Mautic\\PointBundle\\EventListener\\PointSubscriber'])) {
            return $container->services['Mautic\\PointBundle\\EventListener\\PointSubscriber'];
        }

        return $container->services['Mautic\\PointBundle\\EventListener\\PointSubscriber'] = new \Mautic\PointBundle\EventListener\PointSubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a);
    }
}