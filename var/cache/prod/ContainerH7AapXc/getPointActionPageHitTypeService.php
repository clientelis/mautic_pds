<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointActionPageHitTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\Form\Type\PointActionPageHitType' shared autowired service.
     *
     * @return \Mautic\PageBundle\Form\Type\PointActionPageHitType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PageBundle\\Form\\Type\\PointActionPageHitType'] = new \Mautic\PageBundle\Form\Type\PointActionPageHitType();
    }
}
