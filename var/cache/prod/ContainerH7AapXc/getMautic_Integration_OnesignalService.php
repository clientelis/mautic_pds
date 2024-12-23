<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integration_OnesignalService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integration.onesignal' shared service.
     *
     * @return \Mautic\NotificationBundle\Integration\OneSignalIntegration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integration.onesignal'] = new \Mautic\NotificationBundle\Integration\OneSignalIntegration(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['mautic.helper.cache_storage'] ?? $container->getMautic_Helper_CacheStorageService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['router'] ?? $container->getRouterService()), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['mautic.helper.encryption'] ?? $container->getMautic_Helper_EncryptionService()), ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService()), ($container->services['Mautic\\LeadBundle\\Model\\CompanyModel'] ?? $container->getCompanyModelService()), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), ($container->services['Mautic\\CoreBundle\\Model\\NotificationModel'] ?? $container->getNotificationModelService()), ($container->services['Mautic\\LeadBundle\\Model\\FieldModel'] ?? $container->getFieldModel2Service()), ($container->services['Mautic\\PluginBundle\\Model\\IntegrationEntityModel'] ?? $container->load('getIntegrationEntityModelService')), ($container->services['Mautic\\LeadBundle\\Model\\DoNotContact'] ?? $container->getDoNotContactService()));
    }
}
