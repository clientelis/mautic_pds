<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Form\Type\ConfigType' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Form\Type\ConfigType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticSocialBundle\\Form\\Type\\ConfigType'] = new \MauticPlugin\MauticSocialBundle\Form\Type\ConfigType(($container->services['mautic.lead.field.field_list'] ?? $container->getMautic_Lead_Field_FieldListService()));
    }
}
