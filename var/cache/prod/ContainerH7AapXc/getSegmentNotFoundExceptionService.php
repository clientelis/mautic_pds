<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentNotFoundExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Segment\Exception\SegmentNotFoundException' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Segment\Exception\SegmentNotFoundException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Segment\\Exception\\SegmentNotFoundException'] = new \Mautic\LeadBundle\Segment\Exception\SegmentNotFoundException();
    }
}
