<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_CleanCommandService extends AppKernelProdContainer
{
    /*
     * Gets the private 'fos_oauth_server.clean_command' shared service.
     *
     * @return \FOS\OAuthServerBundle\Command\CleanCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['fos_oauth_server.clean_command'] = $instance = new \FOS\OAuthServerBundle\Command\CleanCommand(($container->privates['fos_oauth_server.access_token_manager.default'] ?? $container->load('getFosOauthServer_AccessTokenManager_DefaultService')), ($container->privates['fos_oauth_server.refresh_token_manager.default'] ?? $container->load('getFosOauthServer_RefreshTokenManager_DefaultService')), ($container->privates['fos_oauth_server.auth_code_manager.default'] ?? $container->load('getFosOauthServer_AuthCodeManager_DefaultService')));

        $instance->setName('fos:oauth-server:clean');

        return $instance;
    }
}
