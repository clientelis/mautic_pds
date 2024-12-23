<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuilderSubscriber3Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\EventListener\BuilderSubscriber' shared autowired service.
     *
     * @return \Mautic\PageBundle\EventListener\BuilderSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\BuilderSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\BuilderSubscriber'];
        }
        $b = ($container->services['Mautic\\PageBundle\\Model\\PageModel'] ?? $container->getPageModelService());

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\BuilderSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\BuilderSubscriber'];
        }
        $c = ($container->services['mautic.helper.token_builder.factory'] ?? $container->load('getMautic_Helper_TokenBuilder_FactoryService'));

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\BuilderSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\BuilderSubscriber'];
        }
        $d = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\BuilderSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\BuilderSubscriber'];
        }
        $e = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\BuilderSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\BuilderSubscriber'];
        }

        return $container->services['Mautic\\PageBundle\\EventListener\\BuilderSubscriber'] = new \Mautic\PageBundle\EventListener\BuilderSubscriber(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), ($container->services['mautic.page.helper.token'] ?? $container->getMautic_Page_Helper_TokenService()), $a, $b, $c, ($container->services['translator'] ?? $container->getTranslator2Service()), $d, $e);
    }
}
