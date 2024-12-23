<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticClearbitBundle\EventListener\LeadSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\MauticClearbitBundle\EventListener\LeadSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticClearbitBundle\\EventListener\\LeadSubscriber'] = new \MauticPlugin\MauticClearbitBundle\EventListener\LeadSubscriber(($container->services['mautic.plugin.clearbit.lookup_helper'] ?? $container->load('getMautic_Plugin_Clearbit_LookupHelperService')));
    }
}