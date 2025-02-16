<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LHChVx6Service extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.LHChVx6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LHChVx6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'integrationHelper' => ['services', 'mautic.helper.integration', 'getMautic_Helper_IntegrationService', false],
            'mailer' => ['services', 'Mautic\\EmailBundle\\Helper\\MailHelper', 'getMailHelperService', false],
            'mauticLogger' => ['services', 'monolog.logger.mautic', 'getMonolog_Logger_MauticService', false],
        ], [
            'integrationHelper' => '?',
            'mailer' => 'Mautic\\EmailBundle\\Helper\\MailHelper',
            'mauticLogger' => '?',
        ]);
    }
}
