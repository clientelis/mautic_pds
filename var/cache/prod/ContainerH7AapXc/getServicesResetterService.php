<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesResetterService extends AppKernelProdContainer
{
    /*
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () use ($container) {
            if (isset($container->services['cache.app'])) {
                yield 'cache.app' => ($container->services['cache.app'] ?? null);
            }
            if (isset($container->services['cache.system'])) {
                yield 'cache.system' => ($container->services['cache.system'] ?? null);
            }
            if (isset($container->privates['cache.validator'])) {
                yield 'cache.validator' => ($container->privates['cache.validator'] ?? null);
            }
            if (false) {
                yield 'cache.serializer' => null;
            }
            if (isset($container->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($container->privates['cache.annotations'] ?? null);
            }
            if (isset($container->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($container->privates['cache.property_info'] ?? null);
            }
            if (isset($container->privates['cache.messenger.restart_workers_signal'])) {
                yield 'cache.messenger.restart_workers_signal' => ($container->privates['cache.messenger.restart_workers_signal'] ?? null);
            }
            if (isset($container->privates['http_client'])) {
                yield 'http_client' => ($container->privates['http_client'] ?? null);
            }
            if (isset($container->privates['mailer.message_logger_listener'])) {
                yield 'mailer.message_logger_listener' => ($container->privates['mailer.message_logger_listener'] ?? null);
            }
            if (isset($container->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($container->privates['debug.stopwatch'] ?? null);
            }
            if (isset($container->privates['api_rate_limiter_cache'])) {
                yield 'api_rate_limiter_cache' => ($container->privates['api_rate_limiter_cache'] ?? null);
            }
            if (isset($container->privates['doctrine_result_cache'])) {
                yield 'doctrine_result_cache' => ($container->privates['doctrine_result_cache'] ?? null);
            }
            if (isset($container->privates['session_listener'])) {
                yield 'session_listener' => ($container->privates['session_listener'] ?? null);
            }
            if (isset($container->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($container->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($container->services['cache.validator_expression_language'])) {
                yield 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? null);
            }
            if (isset($container->privates['messenger.transport.in_memory.factory'])) {
                yield 'messenger.transport.in_memory.factory' => ($container->privates['messenger.transport.in_memory.factory'] ?? null);
            }
            if (isset($container->services['.container.private.security.token_storage'])) {
                yield 'security.token_storage' => ($container->services['.container.private.security.token_storage'] ?? null);
            }
            if (isset($container->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($container->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($container->privates['monolog.handler.main'] ?? null);
            }
            if (isset($container->services['doctrine'])) {
                yield 'doctrine' => ($container->services['doctrine'] ?? null);
            }
            if (false) {
                yield 'doctrine.debug_data_holder' => null;
            }
            if (isset($container->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($container->privates['form.type.entity'] ?? null);
            }
            if (isset($container->services['fos_rest.view_handler'])) {
                yield 'fos_rest.view_handler.default' => ($container->services['fos_rest.view_handler'] ?? null);
            }
            if (isset($container->services['.container.private.twig'])) {
                yield 'twig' => ($container->services['.container.private.twig'] ?? null);
            }
            if (isset($container->privates['twig.form.engine'])) {
                yield 'twig.form.engine' => ($container->privates['twig.form.engine'] ?? null);
            }
            if (isset($container->services['Mautic\\CampaignBundle\\Executioner\\ScheduledExecutioner'])) {
                yield 'Mautic\\CampaignBundle\\Executioner\\ScheduledExecutioner' => ($container->services['Mautic\\CampaignBundle\\Executioner\\ScheduledExecutioner'] ?? null);
            }
            if (isset($container->services['Mautic\\CampaignBundle\\Executioner\\TestInactiveExecutioner'])) {
                yield 'Mautic\\CampaignBundle\\Executioner\\TestInactiveExecutioner' => ($container->services['Mautic\\CampaignBundle\\Executioner\\TestInactiveExecutioner'] ?? null);
            }
            if (isset($container->services['Mautic\\CampaignBundle\\Executioner\\TestScheduledExecutioner'])) {
                yield 'Mautic\\CampaignBundle\\Executioner\\TestScheduledExecutioner' => ($container->services['Mautic\\CampaignBundle\\Executioner\\TestScheduledExecutioner'] ?? null);
            }
        }, function () use ($container) {
            return 0 + (int) (isset($container->services['cache.app'])) + (int) (isset($container->services['cache.system'])) + (int) (isset($container->privates['cache.validator'])) + (int) (false) + (int) (isset($container->privates['cache.annotations'])) + (int) (isset($container->privates['cache.property_info'])) + (int) (isset($container->privates['cache.messenger.restart_workers_signal'])) + (int) (isset($container->privates['http_client'])) + (int) (isset($container->privates['mailer.message_logger_listener'])) + (int) (isset($container->privates['debug.stopwatch'])) + (int) (isset($container->privates['api_rate_limiter_cache'])) + (int) (isset($container->privates['doctrine_result_cache'])) + (int) (isset($container->privates['session_listener'])) + (int) (isset($container->privates['form.choice_list_factory.cached'])) + (int) (isset($container->services['cache.validator_expression_language'])) + (int) (isset($container->privates['messenger.transport.in_memory.factory'])) + (int) (isset($container->services['.container.private.security.token_storage'])) + (int) (isset($container->privates['cache.security_expression_language'])) + (int) (isset($container->privates['monolog.handler.main'])) + (int) (isset($container->services['doctrine'])) + (int) (false) + (int) (isset($container->privates['form.type.entity'])) + (int) (isset($container->services['fos_rest.view_handler'])) + (int) (isset($container->services['.container.private.twig'])) + (int) (isset($container->privates['twig.form.engine'])) + (int) (isset($container->services['Mautic\\CampaignBundle\\Executioner\\ScheduledExecutioner'])) + (int) (isset($container->services['Mautic\\CampaignBundle\\Executioner\\TestInactiveExecutioner'])) + (int) (isset($container->services['Mautic\\CampaignBundle\\Executioner\\TestScheduledExecutioner']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'cache.messenger.restart_workers_signal' => [0 => 'reset'], 'http_client' => [0 => '?reset'], 'mailer.message_logger_listener' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'api_rate_limiter_cache' => [0 => 'reset'], 'doctrine_result_cache' => [0 => 'reset'], 'session_listener' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'cache.validator_expression_language' => [0 => 'reset'], 'messenger.transport.in_memory.factory' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'doctrine.debug_data_holder' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'fos_rest.view_handler.default' => [0 => 'reset'], 'twig' => [0 => 'resetGlobals'], 'twig.form.engine' => [0 => 'reset'], 'Mautic\\CampaignBundle\\Executioner\\ScheduledExecutioner' => [0 => 'reset'], 'Mautic\\CampaignBundle\\Executioner\\TestInactiveExecutioner' => [0 => 'reset'], 'Mautic\\CampaignBundle\\Executioner\\TestScheduledExecutioner' => [0 => 'reset']]);
    }
}
