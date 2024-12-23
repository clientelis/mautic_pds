<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\Model\MessageModel' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\Model\MessageModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.channel.helper.channel_list'] ?? $container->getMautic_Channel_Helper_ChannelListService());

        if (isset($container->services['Mautic\\ChannelBundle\\Model\\MessageModel'])) {
            return $container->services['Mautic\\ChannelBundle\\Model\\MessageModel'];
        }
        $b = ($container->services['Mautic\\CampaignBundle\\Model\\CampaignModel'] ?? $container->getCampaignModelService());

        if (isset($container->services['Mautic\\ChannelBundle\\Model\\MessageModel'])) {
            return $container->services['Mautic\\ChannelBundle\\Model\\MessageModel'];
        }
        $c = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\ChannelBundle\\Model\\MessageModel'])) {
            return $container->services['Mautic\\ChannelBundle\\Model\\MessageModel'];
        }
        $d = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\ChannelBundle\\Model\\MessageModel'])) {
            return $container->services['Mautic\\ChannelBundle\\Model\\MessageModel'];
        }

        return $container->services['Mautic\\ChannelBundle\\Model\\MessageModel'] = new \Mautic\ChannelBundle\Model\MessageModel($a, $b, ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $c, $d, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
