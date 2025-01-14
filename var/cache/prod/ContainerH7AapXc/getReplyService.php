<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReplyService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\MonitoredEmail\Processor\Reply' shared autowired service.
     *
     * @return \Mautic\EmailBundle\MonitoredEmail\Processor\Reply
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\EmailBundle\\Model\\EmailStatModel'] ?? $container->getEmailStatModelService());

        if (isset($container->services['Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply'])) {
            return $container->services['Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply'];
        }
        $b = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply'])) {
            return $container->services['Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply'];
        }
        $c = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply'])) {
            return $container->services['Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply'];
        }
        $d = ($container->services['mautic.tracker.contact'] ?? $container->getMautic_Tracker_ContactService());

        if (isset($container->services['Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply'])) {
            return $container->services['Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply'];
        }

        return $container->services['Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply'] = new \Mautic\EmailBundle\MonitoredEmail\Processor\Reply($a, ($container->services['mautic.message.search.contact'] ?? $container->load('getMautic_Message_Search_ContactService')), $b, $c, ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), $d, ($container->services['Mautic\\CoreBundle\\Helper\\EmailAddressHelper'] ?? ($container->services['Mautic\\CoreBundle\\Helper\\EmailAddressHelper'] = new \Mautic\CoreBundle\Helper\EmailAddressHelper())));
    }
}
