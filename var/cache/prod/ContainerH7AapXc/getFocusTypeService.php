<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFocusTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticFocusBundle\Form\Type\FocusType' shared autowired service.
     *
     * @return \MauticPlugin\MauticFocusBundle\Form\Type\FocusType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticFocusBundle\\Form\\Type\\FocusType'] = new \MauticPlugin\MauticFocusBundle\Form\Type\FocusType(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));
    }
}
