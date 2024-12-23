<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadSubscriber7Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\DynamicContentBundle\EventListener\LeadSubscriber' shared autowired service.
     *
     * @return \Mautic\DynamicContentBundle\EventListener\LeadSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\DynamicContentBundle\\EventListener\\LeadSubscriber'])) {
            return $container->services['Mautic\\DynamicContentBundle\\EventListener\\LeadSubscriber'];
        }

        return $container->services['Mautic\\DynamicContentBundle\\EventListener\\LeadSubscriber'] = new \Mautic\DynamicContentBundle\EventListener\LeadSubscriber(($container->services['translator'] ?? $container->getTranslator2Service()), $a, ($container->services['Mautic\\DynamicContentBundle\\Entity\\StatRepository'] ?? $container->load('getStatRepository2Service')));
    }
}
