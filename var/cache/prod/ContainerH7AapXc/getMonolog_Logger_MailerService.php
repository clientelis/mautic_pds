<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_MailerService extends AppKernelProdContainer
{
    /*
     * Gets the private 'monolog.logger.mailer' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['monolog.logger.mailer'] = $instance = new \Symfony\Bridge\Monolog\Logger('mailer');

        $instance->pushProcessor(($container->services['mautic.core.service.log_processor'] ?? ($container->services['mautic.core.service.log_processor'] = new \Mautic\CoreBundle\Monolog\LogProcessor())));
        $instance->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));

        return $instance;
    }
}
