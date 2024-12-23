<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentFilterSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\EventListener\SegmentFilterSubscriber' shared autowired service.
     *
     * @return \Mautic\PointBundle\EventListener\SegmentFilterSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.lead.provider.typeOperator'] ?? $container->load('getMautic_Lead_Provider_TypeOperatorService'));

        if (isset($container->services['Mautic\\PointBundle\\EventListener\\SegmentFilterSubscriber'])) {
            return $container->services['Mautic\\PointBundle\\EventListener\\SegmentFilterSubscriber'];
        }

        return $container->services['Mautic\\PointBundle\\EventListener\\SegmentFilterSubscriber'] = new \Mautic\PointBundle\EventListener\SegmentFilterSubscriber(($container->services['Mautic\\PointBundle\\Entity\\GroupRepository'] ?? $container->load('getGroupRepositoryService')), $a, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}