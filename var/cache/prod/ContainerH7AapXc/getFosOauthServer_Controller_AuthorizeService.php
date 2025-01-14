<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_Controller_AuthorizeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'fos_oauth_server.controller.authorize' shared service.
     *
     * @return \FOS\OAuthServerBundle\Controller\AuthorizeController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['fos_oauth_server.controller.authorize'] = new \FOS\OAuthServerBundle\Controller\AuthorizeController(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['fos_oauth_server.authorize.form'] ?? $container->load('getFosOauthServer_Authorize_FormService')), ($container->privates['fos_oauth_server.authorize.form.handler.default'] ?? $container->load('getFosOauthServer_Authorize_Form_Handler_DefaultService')), ($container->privates['fos_oauth_server.server'] ?? $container->load('getFosOauthServer_ServerService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['fos_oauth_server.client_manager.default'] ?? $container->load('getFosOauthServer_ClientManager_DefaultService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));
    }
}
