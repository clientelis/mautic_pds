<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTracking404ModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\Model\Tracking404Model' shared autowired service.
     *
     * @return \Mautic\PageBundle\Model\Tracking404Model
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.tracker.contact'] ?? $container->getMautic_Tracker_ContactService());

        if (isset($container->services['Mautic\\PageBundle\\Model\\Tracking404Model'])) {
            return $container->services['Mautic\\PageBundle\\Model\\Tracking404Model'];
        }
        $b = ($container->services['Mautic\\PageBundle\\Model\\PageModel'] ?? $container->getPageModelService());

        if (isset($container->services['Mautic\\PageBundle\\Model\\Tracking404Model'])) {
            return $container->services['Mautic\\PageBundle\\Model\\Tracking404Model'];
        }

        return $container->services['Mautic\\PageBundle\\Model\\Tracking404Model'] = new \Mautic\PageBundle\Model\Tracking404Model(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), $a, $b);
    }
}