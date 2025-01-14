<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Validator_LeadlistaccessService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.validator.leadlistaccess' shared service.
     *
     * @return \Mautic\LeadBundle\Form\Validator\Constraints\LeadListAccessValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? $container->getListModelService());

        if (isset($container->services['mautic.validator.leadlistaccess'])) {
            return $container->services['mautic.validator.leadlistaccess'];
        }

        return $container->services['mautic.validator.leadlistaccess'] = new \Mautic\LeadBundle\Form\Validator\Constraints\LeadListAccessValidator($a);
    }
}
