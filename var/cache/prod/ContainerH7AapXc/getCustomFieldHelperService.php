<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomFieldHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Helper\CustomFieldHelper' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Helper\CustomFieldHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Helper\\CustomFieldHelper'] = new \Mautic\LeadBundle\Helper\CustomFieldHelper();
    }
}
