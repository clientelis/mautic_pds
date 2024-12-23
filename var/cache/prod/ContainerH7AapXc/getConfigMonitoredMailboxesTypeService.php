<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigMonitoredMailboxesTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Form\Type\ConfigMonitoredMailboxesType' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Form\Type\ConfigMonitoredMailboxesType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Form\\Type\\ConfigMonitoredMailboxesType'] = new \Mautic\EmailBundle\Form\Type\ConfigMonitoredMailboxesType(($container->services['Mautic\\EmailBundle\\MonitoredEmail\\Mailbox'] ?? $container->getMailboxService()));
    }
}
