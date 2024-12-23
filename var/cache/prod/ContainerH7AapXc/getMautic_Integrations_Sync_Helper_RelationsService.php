<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Sync_Helper_RelationsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.sync.helper.relations' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\Helper\RelationsHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.sync.helper.relations'] = new \Mautic\IntegrationsBundle\Sync\Helper\RelationsHelper(($container->services['mautic.integrations.helper.sync_mapping'] ?? $container->load('getMautic_Integrations_Helper_SyncMappingService')));
    }
}