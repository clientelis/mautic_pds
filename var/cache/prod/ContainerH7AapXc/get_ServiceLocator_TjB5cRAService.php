<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TjB5cRAService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.tjB5cRA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tjB5cRA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'formFactory' => ['services', '.container.private.form.factory', 'get_Container_Private_Form_FactoryService', false],
            'model' => ['services', 'Mautic\\EmailBundle\\Model\\EmailModel', 'getEmailModelService', false],
            'security' => ['services', 'mautic.security', 'getMautic_SecurityService', false],
        ], [
            'formFactory' => '?',
            'model' => 'Mautic\\EmailBundle\\Model\\EmailModel',
            'security' => '?',
        ]);
    }
}
