<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagDependenciesService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticTagManagerBundle\Stats\TagDependencies' shared autowired service.
     *
     * @return \MauticPlugin\MauticTagManagerBundle\Stats\TagDependencies
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CampaignBundle\\Model\\CampaignModel'] ?? $container->getCampaignModelService());

        if (isset($container->services['MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies'])) {
            return $container->services['MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies'];
        }
        $b = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? $container->getListModelService());

        if (isset($container->services['MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies'])) {
            return $container->services['MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies'];
        }
        $c = ($container->services['Mautic\\FormBundle\\Model\\ActionModel'] ?? $container->getActionModelService());

        if (isset($container->services['MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies'])) {
            return $container->services['MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies'];
        }
        $d = ($container->services['Mautic\\PointBundle\\Model\\TriggerEventModel'] ?? $container->load('getTriggerEventModelService'));

        if (isset($container->services['MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies'])) {
            return $container->services['MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies'];
        }
        $e = ($container->services['Mautic\\ReportBundle\\Model\\ReportModel'] ?? $container->load('getReportModelService'));

        if (isset($container->services['MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies'])) {
            return $container->services['MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies'];
        }

        return $container->services['MauticPlugin\\MauticTagManagerBundle\\Stats\\TagDependencies'] = new \MauticPlugin\MauticTagManagerBundle\Stats\TagDependencies($a, $b, $c, $d, $e);
    }
}
