<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSlotCategoryListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\Type\SlotCategoryListType' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\Type\SlotCategoryListType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\Type\\SlotCategoryListType'] = new \Mautic\CoreBundle\Form\Type\SlotCategoryListType(($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
