<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCleanFormSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\EventListener\CleanFormSubscriber' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\EventListener\CleanFormSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber'] = new \Mautic\CoreBundle\Form\EventListener\CleanFormSubscriber();
    }
}
