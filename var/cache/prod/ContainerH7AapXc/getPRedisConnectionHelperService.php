<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPRedisConnectionHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\PRedisConnectionHelper' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\PRedisConnectionHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\PRedisConnectionHelper'] = new \Mautic\CoreBundle\Helper\PRedisConnectionHelper();
    }
}
