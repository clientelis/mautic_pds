<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CategoryBundle\Form\Type\CategoryListType' shared autowired service.
     *
     * @return \Mautic\CategoryBundle\Form\Type\CategoryListType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CategoryBundle\\Model\\CategoryModel'] ?? $container->getCategoryModelService());

        if (isset($container->services['Mautic\\CategoryBundle\\Form\\Type\\CategoryListType'])) {
            return $container->services['Mautic\\CategoryBundle\\Form\\Type\\CategoryListType'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\CategoryBundle\\Form\\Type\\CategoryListType'])) {
            return $container->services['Mautic\\CategoryBundle\\Form\\Type\\CategoryListType'];
        }

        return $container->services['Mautic\\CategoryBundle\\Form\\Type\\CategoryListType'] = new \Mautic\CategoryBundle\Form\Type\CategoryListType(($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()), ($container->services['translator'] ?? $container->getTranslator2Service()), $a, $b);
    }
}
