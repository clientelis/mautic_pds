<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormFieldNumberTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Form\Type\FormFieldNumberType' shared autowired service.
     *
     * @return \Mautic\FormBundle\Form\Type\FormFieldNumberType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\Form\\Type\\FormFieldNumberType'] = new \Mautic\FormBundle\Form\Type\FormFieldNumberType();
    }
}