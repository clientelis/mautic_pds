<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__LgKg3fService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator..LgKg3f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..LgKg3f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'segmentCampaignShareService' => ['services', 'mautic.lead.segment.stat.campaign.share', 'getMautic_Lead_Segment_Stat_Campaign_ShareService', true],
        ], [
            'segmentCampaignShareService' => '?',
        ]);
    }
}
