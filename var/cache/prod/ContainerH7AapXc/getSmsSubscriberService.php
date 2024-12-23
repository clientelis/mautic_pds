<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSmsSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\EventListener\SmsSubscriber' shared autowired service.
     *
     * @return \Mautic\SmsBundle\EventListener\SmsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? $container->getAuditLogModelService());

        if (isset($container->services['Mautic\\SmsBundle\\EventListener\\SmsSubscriber'])) {
            return $container->services['Mautic\\SmsBundle\\EventListener\\SmsSubscriber'];
        }
        $b = ($container->services['Mautic\\PageBundle\\Model\\TrackableModel'] ?? $container->getTrackableModelService());

        if (isset($container->services['Mautic\\SmsBundle\\EventListener\\SmsSubscriber'])) {
            return $container->services['Mautic\\SmsBundle\\EventListener\\SmsSubscriber'];
        }
        $c = ($container->services['mautic.helper.sms'] ?? $container->load('getMautic_Helper_SmsService'));

        if (isset($container->services['Mautic\\SmsBundle\\EventListener\\SmsSubscriber'])) {
            return $container->services['Mautic\\SmsBundle\\EventListener\\SmsSubscriber'];
        }

        return $container->services['Mautic\\SmsBundle\\EventListener\\SmsSubscriber'] = new \Mautic\SmsBundle\EventListener\SmsSubscriber($a, $b, ($container->services['mautic.page.helper.token'] ?? $container->getMautic_Page_Helper_TokenService()), ($container->services['Mautic\\AssetBundle\\Helper\\TokenHelper'] ?? $container->getTokenHelperService()), $c, ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}