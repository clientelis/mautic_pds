<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSortableValueLabelListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\Type\SortableValueLabelListType' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\Type\SortableValueLabelListType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\Type\\SortableValueLabelListType'] = new \Mautic\CoreBundle\Form\Type\SortableValueLabelListType();
    }
}