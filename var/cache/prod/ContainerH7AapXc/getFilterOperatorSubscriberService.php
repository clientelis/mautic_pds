<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilterOperatorSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\FilterOperatorSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\FilterOperatorSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.lead.provider.typeOperator'] ?? $container->load('getMautic_Lead_Provider_TypeOperatorService'));

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\FilterOperatorSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\FilterOperatorSubscriber'];
        }
        $b = ($container->services['mautic.lead.provider.fieldChoices'] ?? $container->load('getMautic_Lead_Provider_FieldChoicesService'));

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\FilterOperatorSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\FilterOperatorSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\FilterOperatorSubscriber'] = new \Mautic\LeadBundle\EventListener\FilterOperatorSubscriber(($container->services['mautic.lead.segment.operator_options'] ?? ($container->services['mautic.lead.segment.operator_options'] = new \Mautic\LeadBundle\Segment\OperatorOptions())), ($container->services['Mautic\\LeadBundle\\Entity\\LeadFieldRepository'] ?? $container->getLeadFieldRepositoryService()), $a, $b, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
