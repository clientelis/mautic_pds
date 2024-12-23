<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Query_Builder_ComplexRelation_ValueService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.query.builder.complex_relation.value' shared service.
     *
     * @return \Mautic\LeadBundle\Segment\Query\Filter\ComplexRelationValueFilterQueryBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.lead.query.builder.complex_relation.value'] = new \Mautic\LeadBundle\Segment\Query\Filter\ComplexRelationValueFilterQueryBuilder(($container->services['mautic.lead.model.random_parameter_name'] ?? ($container->services['mautic.lead.model.random_parameter_name'] = new \Mautic\LeadBundle\Segment\RandomParameterName())), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
