<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentActionModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Model\SegmentActionModel' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Model\SegmentActionModel
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Model\\SegmentActionModel'] = new \Mautic\LeadBundle\Model\SegmentActionModel(($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService()));
    }
}
