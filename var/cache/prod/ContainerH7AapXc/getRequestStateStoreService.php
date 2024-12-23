<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRequestStateStoreService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Security\SAML\Store\Request\RequestStateStore' shared autowired service.
     *
     * @return \Mautic\UserBundle\Security\SAML\Store\Request\RequestStateStore
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\UserBundle\\Security\\SAML\\Store\\Request\\RequestStateStore'] = new \Mautic\UserBundle\Security\SAML\Store\Request\RequestStateStore(($container->services['mautic.cache.provider'] ?? $container->getMautic_Cache_ProviderService()), 'main', 'saml_request_state_');
    }
}
