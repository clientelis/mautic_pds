<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Sql_GAUService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.Sql.GAU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Sql.GAU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'analyticsHelper' => ['services', 'mautic.helper.twig.analytics', 'getMautic_Helper_Twig_AnalyticsService', false],
            'emailConfig' => ['services', 'Mautic\\EmailBundle\\Helper\\EmailConfig', 'getEmailConfigService', true],
            'model' => ['services', 'Mautic\\EmailBundle\\Model\\EmailModel', 'getEmailModelService', false],
        ], [
            'analyticsHelper' => '?',
            'emailConfig' => 'Mautic\\EmailBundle\\Helper\\EmailConfig',
            'model' => 'Mautic\\EmailBundle\\Model\\EmailModel',
        ]);
    }
}
