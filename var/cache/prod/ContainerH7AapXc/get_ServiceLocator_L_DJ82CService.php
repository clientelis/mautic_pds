<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L_DJ82CService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.l.DJ82C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.l.DJ82C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dateTemplateHelper' => ['services', 'mautic.helper.twig.date', 'getMautic_Helper_Twig_DateService', false],
            'pageTokenHelper' => ['services', 'mautic.page.helper.token', 'getMautic_Page_Helper_TokenService', false],
        ], [
            'dateTemplateHelper' => '?',
            'pageTokenHelper' => '?',
        ]);
    }
}
