<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUrlMatcherService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Helper\UrlMatcher' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Helper\UrlMatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Helper\\UrlMatcher'] = new \Mautic\EmailBundle\Helper\UrlMatcher();
    }
}
