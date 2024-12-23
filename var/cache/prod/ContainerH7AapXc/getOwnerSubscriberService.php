<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOwnerSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\OwnerSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\OwnerSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\OwnerSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\OwnerSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\OwnerSubscriber'] = new \Mautic\LeadBundle\EventListener\OwnerSubscriber($a, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
