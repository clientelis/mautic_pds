<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ApiBundle\EventListener\SearchSubscriber' shared autowired service.
     *
     * @return \Mautic\ApiBundle\EventListener\SearchSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\ApiBundle\\Model\\ClientModel'] ?? $container->load('getClientModelService'));

        if (isset($container->services['Mautic\\ApiBundle\\EventListener\\SearchSubscriber'])) {
            return $container->services['Mautic\\ApiBundle\\EventListener\\SearchSubscriber'];
        }
        $b = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->services['Mautic\\ApiBundle\\EventListener\\SearchSubscriber'])) {
            return $container->services['Mautic\\ApiBundle\\EventListener\\SearchSubscriber'];
        }

        return $container->services['Mautic\\ApiBundle\\EventListener\\SearchSubscriber'] = new \Mautic\ApiBundle\EventListener\SearchSubscriber($a, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $b);
    }
}
