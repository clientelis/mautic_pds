<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointSubscriber3Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\PointSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\PointSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\PointBundle\\Model\\PointModel'] ?? $container->load('getPointModelService'));

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\PointSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\PointSubscriber'];
        }

        return $container->services['Mautic\\EmailBundle\\EventListener\\PointSubscriber'] = new \Mautic\EmailBundle\EventListener\PointSubscriber($a, ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()));
    }
}
