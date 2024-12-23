<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Social_Helper_TwitterCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.social.helper.twitter_command' shared service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Helper\TwitterCommandHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.social.helper.twitter_command'] = new \MauticPlugin\MauticSocialBundle\Helper\TwitterCommandHelper(($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService()), ($container->services['Mautic\\LeadBundle\\Model\\FieldModel'] ?? $container->getFieldModel2Service()), ($container->services['MauticPlugin\\MauticSocialBundle\\Model\\MonitoringModel'] ?? $container->load('getMonitoringModelService')), ($container->services['MauticPlugin\\MauticSocialBundle\\Model\\PostCountModel'] ?? $container->load('getPostCountModelService')), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
