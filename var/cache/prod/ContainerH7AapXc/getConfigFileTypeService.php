<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigFileTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ConfigBundle\Form\Type\ConfigFileType' shared autowired service.
     *
     * @return \Mautic\ConfigBundle\Form\Type\ConfigFileType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ConfigBundle\\Form\\Type\\ConfigFileType'] = new \Mautic\ConfigBundle\Form\Type\ConfigFileType();
    }
}
