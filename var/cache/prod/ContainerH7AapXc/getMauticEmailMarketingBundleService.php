<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticEmailMarketingBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticEmailMarketingBundle\MauticEmailMarketingBundle' shared autowired service.
     *
     * @return \MauticPlugin\MauticEmailMarketingBundle\MauticEmailMarketingBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticEmailMarketingBundle\\MauticEmailMarketingBundle'] = new \MauticPlugin\MauticEmailMarketingBundle\MauticEmailMarketingBundle();
    }
}
