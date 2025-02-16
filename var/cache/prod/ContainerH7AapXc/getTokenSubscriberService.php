<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTokenSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\TokenSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\TokenSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\TokenSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\TokenSubscriber'];
        }

        return $container->services['Mautic\\EmailBundle\\EventListener\\TokenSubscriber'] = new \Mautic\EmailBundle\EventListener\TokenSubscriber($a, ($container->services['mautic.lead.helper.primary_company'] ?? $container->getMautic_Lead_Helper_PrimaryCompanyService()), ($container->services['Mautic\\LeadBundle\\Entity\\LeadListRepository'] ?? $container->load('getLeadListRepositoryService')));
    }
}
