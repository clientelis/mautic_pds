<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Constraint_AliasService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.constraint.alias' shared service.
     *
     * @return \Mautic\LeadBundle\Form\Validator\Constraints\UniqueUserAliasValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.lead.constraint.alias'] = new \Mautic\LeadBundle\Form\Validator\Constraints\UniqueUserAliasValidator(($container->services['Mautic\\LeadBundle\\Entity\\LeadListRepository'] ?? $container->load('getLeadListRepositoryService')), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()));
    }
}
