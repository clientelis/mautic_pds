<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormFieldTelTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Form\Type\FormFieldTelType' shared autowired service.
     *
     * @return \Mautic\FormBundle\Form\Type\FormFieldTelType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\Form\\Type\\FormFieldTelType'] = new \Mautic\FormBundle\Form\Type\FormFieldTelType(($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
