<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailSubscriber4Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\EventListener\EmailSubscriber' shared autowired service.
     *
     * @return \Mautic\FormBundle\EventListener\EmailSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\EventListener\\EmailSubscriber'] = new \Mautic\FormBundle\EventListener\EmailSubscriber();
    }
}
