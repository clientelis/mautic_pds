<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticStatsBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\StatsBundle\MauticStatsBundle' shared autowired service.
     *
     * @return \Mautic\StatsBundle\MauticStatsBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\StatsBundle\\MauticStatsBundle'] = new \Mautic\StatsBundle\MauticStatsBundle();
    }
}
