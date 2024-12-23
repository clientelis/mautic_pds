<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Update_Step_ChecksService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.update.step.checks' shared service.
     *
     * @return \Mautic\CoreBundle\Update\Step\PreUpdateChecksStep
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.update.step.checks'] = new \Mautic\CoreBundle\Update\Step\PreUpdateChecksStep(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.helper.update'] ?? $container->getMautic_Helper_UpdateService()));
    }
}
