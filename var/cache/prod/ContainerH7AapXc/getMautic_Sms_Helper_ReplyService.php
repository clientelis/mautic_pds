<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Sms_Helper_ReplyService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.sms.helper.reply' shared service.
     *
     * @return \Mautic\SmsBundle\Helper\ReplyHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.sms.helper.reply'] = new \Mautic\SmsBundle\Helper\ReplyHelper(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['mautic.tracker.contact'] ?? $container->getMautic_Tracker_ContactService()));
    }
}
