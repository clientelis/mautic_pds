<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointActionUrlHitTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\Form\Type\PointActionUrlHitType' shared autowired service.
     *
     * @return \Mautic\PageBundle\Form\Type\PointActionUrlHitType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PageBundle\\Form\\Type\\PointActionUrlHitType'] = new \Mautic\PageBundle\Form\Type\PointActionUrlHitType();
    }
}
