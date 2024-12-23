<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Update_StepProviderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.update.step_provider' shared service.
     *
     * @return \Mautic\CoreBundle\Update\StepProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['mautic.update.step_provider'] = $instance = new \Mautic\CoreBundle\Update\StepProvider();

        $instance->addStep(($container->services['mautic.update.step.delete_cache'] ?? $container->load('getMautic_Update_Step_DeleteCacheService')));
        $instance->addStep(($container->services['mautic.update.step.finalize'] ?? $container->load('getMautic_Update_Step_FinalizeService')));
        $instance->addStep(($container->services['mautic.update.step.install_new_files'] ?? $container->load('getMautic_Update_Step_InstallNewFilesService')));
        $instance->addStep(($container->services['mautic.update.step.remove_deleted_files'] ?? $container->load('getMautic_Update_Step_RemoveDeletedFilesService')));
        $instance->addStep(($container->services['mautic.update.step.update_schema'] ?? $container->load('getMautic_Update_Step_UpdateSchemaService')));
        $instance->addStep(($container->services['mautic.update.step.update_translations'] ?? $container->load('getMautic_Update_Step_UpdateTranslationsService')));
        $instance->addStep(($container->services['mautic.update.step.checks'] ?? $container->load('getMautic_Update_Step_ChecksService')));

        return $instance;
    }
}
