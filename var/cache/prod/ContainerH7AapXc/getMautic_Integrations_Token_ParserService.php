<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Token_ParserService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.token.parser' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Helper\TokenParser
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.token.parser'] = new \Mautic\IntegrationsBundle\Helper\TokenParser();
    }
}
