<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompanyControllerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Controller\CompanyController' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Controller\CompanyController
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        $container->services['Mautic\\LeadBundle\\Controller\\CompanyController'] = $instance = new \Mautic\LeadBundle\Controller\CompanyController(($container->services['.container.private.form.factory'] ?? $container->get_Container_Private_Form_FactoryService()), ($container->services['mautic.helper.form.field_helper'] ?? $container->getMautic_Helper_Form_FieldHelperService()), ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['Mautic\\CoreBundle\\Factory\\MauticFactory'] ?? $container->getMauticFactoryService()), ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? $container->getModelFactoryService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.core.service.flashbag'] ?? $container->getMautic_Core_Service_FlashbagService()), $a, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->get_ServiceLocator_Mx0UMmYService())->withContext('Mautic\\LeadBundle\\Controller\\CompanyController', $container));
        $instance->setRequestStackLeadDetailsTrait($a);

        return $instance;
    }
}
