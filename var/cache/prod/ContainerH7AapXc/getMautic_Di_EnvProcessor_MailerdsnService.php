<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Di_EnvProcessor_MailerdsnService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.di.env_processor.mailerdsn' shared service.
     *
     * @return \Mautic\EmailBundle\DependencyInjection\EnvProcessor\MailerDsnEnvVarProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.di.env_processor.mailerdsn'] = new \Mautic\EmailBundle\DependencyInjection\EnvProcessor\MailerDsnEnvVarProcessor();
    }
}
