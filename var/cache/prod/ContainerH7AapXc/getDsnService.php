<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDsnService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Validator\Dsn' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Validator\Dsn
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Validator\\Dsn'] = new \Mautic\EmailBundle\Validator\Dsn();
    }
}
