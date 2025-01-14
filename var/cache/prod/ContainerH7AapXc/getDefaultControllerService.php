<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDefaultControllerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'LightSaml\SpBundle\Controller\DefaultController' shared service.
     *
     * @return \LightSaml\SpBundle\Controller\DefaultController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['LightSaml\\SpBundle\\Controller\\DefaultController'] = $instance = new \LightSaml\SpBundle\Controller\DefaultController(($container->services['ligthsaml.profile.metadata'] ?? $container->load('getLigthsaml_Profile_MetadataService')), ($container->services['ligthsaml.profile.login_factory'] ?? $container->load('getLigthsaml_Profile_LoginFactoryService')), ($container->privates['lightsaml.container.store'] ?? $container->load('getLightsaml_Container_StoreService')), ($container->privates['lightsaml.container.party'] ?? $container->load('getLightsaml_Container_PartyService')), 'lightsaml_sp.discovery');

        $instance->setContainer($container);

        return $instance;
    }
}
