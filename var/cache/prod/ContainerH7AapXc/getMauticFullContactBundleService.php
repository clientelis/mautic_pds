<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticFullContactBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticFullContactBundle\MauticFullContactBundle' shared autowired service.
     *
     * @return \MauticPlugin\MauticFullContactBundle\MauticFullContactBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticFullContactBundle\\MauticFullContactBundle'] = new \MauticPlugin\MauticFullContactBundle\MauticFullContactBundle();
    }
}
