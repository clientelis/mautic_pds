<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClickthroughHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\ClickthroughHelper' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\ClickthroughHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\ClickthroughHelper'] = new \Mautic\CoreBundle\Helper\ClickthroughHelper();
    }
}
