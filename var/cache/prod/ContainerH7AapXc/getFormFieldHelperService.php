<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormFieldHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Helper\FormFieldHelper' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Helper\FormFieldHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Helper\\FormFieldHelper'] = new \Mautic\LeadBundle\Helper\FormFieldHelper();
    }
}
