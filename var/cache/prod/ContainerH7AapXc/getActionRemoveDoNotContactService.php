<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActionRemoveDoNotContactService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\ActionRemoveDoNotContact' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\ActionRemoveDoNotContact
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Type\\ActionRemoveDoNotContact'] = new \Mautic\LeadBundle\Form\Type\ActionRemoveDoNotContact();
    }
}
