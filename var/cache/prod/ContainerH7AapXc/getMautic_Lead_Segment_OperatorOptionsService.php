<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Segment_OperatorOptionsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.segment.operator_options' shared service.
     *
     * @return \Mautic\LeadBundle\Segment\OperatorOptions
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.lead.segment.operator_options'] = new \Mautic\LeadBundle\Segment\OperatorOptions();
    }
}
