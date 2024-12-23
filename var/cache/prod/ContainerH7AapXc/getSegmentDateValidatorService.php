<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentDateValidatorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Validator\Constraints\SegmentDateValidator' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Validator\Constraints\SegmentDateValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.lead.model.lead_segment_filter_factory'] ?? $container->getMautic_Lead_Model_LeadSegmentFilterFactoryService());

        if (isset($container->services['Mautic\\LeadBundle\\Validator\\Constraints\\SegmentDateValidator'])) {
            return $container->services['Mautic\\LeadBundle\\Validator\\Constraints\\SegmentDateValidator'];
        }

        return $container->services['Mautic\\LeadBundle\\Validator\\Constraints\\SegmentDateValidator'] = new \Mautic\LeadBundle\Validator\Constraints\SegmentDateValidator($a, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
