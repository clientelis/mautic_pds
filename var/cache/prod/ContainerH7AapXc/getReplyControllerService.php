<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReplyControllerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\Controller\ReplyController' shared autowired service.
     *
     * @return \Mautic\SmsBundle\Controller\ReplyController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Mautic\\SmsBundle\\Controller\\ReplyController'] = $instance = new \Mautic\SmsBundle\Controller\ReplyController(($container->services['mautic.sms.callback_handler_container'] ?? $container->load('getMautic_Sms_CallbackHandlerContainerService')), ($container->services['mautic.sms.helper.reply'] ?? $container->load('getMautic_Sms_Helper_ReplyService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->get_ServiceLocator_Mx0UMmYService())->withContext('Mautic\\SmsBundle\\Controller\\ReplyController', $container));

        return $instance;
    }
}
