<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeneratedColumnSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\GeneratedColumnSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\GeneratedColumnSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\EventListener\\GeneratedColumnSubscriber'] = new \Mautic\EmailBundle\EventListener\GeneratedColumnSubscriber();
    }
}
