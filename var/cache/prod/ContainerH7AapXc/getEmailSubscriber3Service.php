<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailSubscriber3Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\EmailSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\EmailSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? $container->getAuditLogModelService());

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\EmailSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\EmailSubscriber'];
        }
        $b = ($container->services['Mautic\\EmailBundle\\Model\\EmailModel'] ?? $container->getEmailModelService());

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\EmailSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\EmailSubscriber'];
        }
        $c = ($container->services['Mautic\\EmailBundle\\Model\\EmailDraftModel'] ?? $container->load('getEmailDraftModelService'));

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\EmailSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\EmailSubscriber'];
        }

        return $container->services['Mautic\\EmailBundle\\EventListener\\EmailSubscriber'] = new \Mautic\EmailBundle\EventListener\EmailSubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a, $b, ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()), $c);
    }
}
