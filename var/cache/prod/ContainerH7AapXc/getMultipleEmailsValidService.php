<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMultipleEmailsValidService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Validator\MultipleEmailsValid' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Validator\MultipleEmailsValid
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Validator\\MultipleEmailsValid'] = new \Mautic\EmailBundle\Validator\MultipleEmailsValid();
    }
}
