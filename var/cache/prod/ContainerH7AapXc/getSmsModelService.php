<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSmsModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\Model\SmsModel' shared autowired service.
     *
     * @return \Mautic\SmsBundle\Model\SmsModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\PageBundle\\Model\\TrackableModel'] ?? $container->getTrackableModelService());

        if (isset($container->services['Mautic\\SmsBundle\\Model\\SmsModel'])) {
            return $container->services['Mautic\\SmsBundle\\Model\\SmsModel'];
        }
        $b = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\SmsBundle\\Model\\SmsModel'])) {
            return $container->services['Mautic\\SmsBundle\\Model\\SmsModel'];
        }
        $c = ($container->services['Mautic\\ChannelBundle\\Model\\MessageQueueModel'] ?? $container->getMessageQueueModelService());

        if (isset($container->services['Mautic\\SmsBundle\\Model\\SmsModel'])) {
            return $container->services['Mautic\\SmsBundle\\Model\\SmsModel'];
        }
        $d = ($container->services['mautic.helper.cache_storage'] ?? $container->getMautic_Helper_CacheStorageService());

        if (isset($container->services['Mautic\\SmsBundle\\Model\\SmsModel'])) {
            return $container->services['Mautic\\SmsBundle\\Model\\SmsModel'];
        }
        $e = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Mautic\\SmsBundle\\Model\\SmsModel'])) {
            return $container->services['Mautic\\SmsBundle\\Model\\SmsModel'];
        }
        $f = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\SmsBundle\\Model\\SmsModel'])) {
            return $container->services['Mautic\\SmsBundle\\Model\\SmsModel'];
        }
        $g = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\SmsBundle\\Model\\SmsModel'])) {
            return $container->services['Mautic\\SmsBundle\\Model\\SmsModel'];
        }

        return $container->services['Mautic\\SmsBundle\\Model\\SmsModel'] = new \Mautic\SmsBundle\Model\SmsModel($a, $b, $c, ($container->services['mautic.sms.transport_chain'] ?? $container->load('getMautic_Sms_TransportChainService')), $d, $e, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $f, $g, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
