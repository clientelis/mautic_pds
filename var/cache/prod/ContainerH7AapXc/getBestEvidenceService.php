<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBestEvidenceService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\IntegrationsBundle\Sync\SyncJudge\Modes\BestEvidence' shared autowired service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\SyncJudge\Modes\BestEvidence
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\BestEvidence'] = new \Mautic\IntegrationsBundle\Sync\SyncJudge\Modes\BestEvidence();
    }
}
