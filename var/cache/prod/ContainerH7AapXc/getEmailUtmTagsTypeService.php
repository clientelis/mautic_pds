<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailUtmTagsTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Form\Type\EmailUtmTagsType' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Form\Type\EmailUtmTagsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Form\\Type\\EmailUtmTagsType'] = new \Mautic\EmailBundle\Form\Type\EmailUtmTagsType();
    }
}
