<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointSubscriber7Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\EventListener\PointSubscriber' shared autowired service.
     *
     * @return \Mautic\PluginBundle\EventListener\PointSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PluginBundle\\EventListener\\PointSubscriber'] = new \Mautic\PluginBundle\EventListener\PointSubscriber();
    }
}
