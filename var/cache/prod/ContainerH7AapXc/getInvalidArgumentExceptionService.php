<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInvalidArgumentExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CacheBundle\Exceptions\InvalidArgumentException' shared autowired service.
     *
     * @return \Mautic\CacheBundle\Exceptions\InvalidArgumentException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CacheBundle\\Exceptions\\InvalidArgumentException'] = new \Mautic\CacheBundle\Exceptions\InvalidArgumentException();
    }
}
