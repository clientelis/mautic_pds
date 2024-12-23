<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Security_Saml_CredentialStoreService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.security.saml.credential_store' shared service.
     *
     * @return \Mautic\UserBundle\Security\SAML\Store\CredentialsStore
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.security.saml.credential_store'] = new \Mautic\UserBundle\Security\SAML\Store\CredentialsStore(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), $container->getEnv('MAUTIC_SAML_ENTITY_ID'));
    }
}
