<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\NotificationBundle\Form\Type\NotificationListType' shared autowired service.
     *
     * @return \Mautic\NotificationBundle\Form\Type\NotificationListType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\NotificationBundle\\Form\\Type\\NotificationListType'] = new \Mautic\NotificationBundle\Form\Type\NotificationListType();
    }
}
