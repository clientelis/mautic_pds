<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_EnsureProductionSettingsCommandService extends AppKernelProdContainer
{
    /*
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\EnsureProductionSettingsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\EnsureProductionSettingsCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }
}
