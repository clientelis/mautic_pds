<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6de9PQRService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.6de9PQR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6de9PQR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contactTracker' => ['services', 'mautic.tracker.contact', 'getMautic_Tracker_ContactService', false],
            'formModel' => ['services', 'Mautic\\FormBundle\\Model\\FormModel', 'getFormModelService', false],
            'leadModel' => ['services', 'Mautic\\LeadBundle\\Model\\LeadModel', 'getLeadModelService', false],
            'mailHash' => ['services', 'Mautic\\EmailBundle\\Helper\\MailHashHelper', 'getMailHashHelperService', false],
            'model' => ['services', 'Mautic\\EmailBundle\\Model\\EmailModel', 'getEmailModelService', false],
            'pageModel' => ['services', 'Mautic\\PageBundle\\Model\\PageModel', 'getPageModelService', false],
        ], [
            'contactTracker' => '?',
            'formModel' => 'Mautic\\FormBundle\\Model\\FormModel',
            'leadModel' => 'Mautic\\LeadBundle\\Model\\LeadModel',
            'mailHash' => 'Mautic\\EmailBundle\\Helper\\MailHashHelper',
            'model' => 'Mautic\\EmailBundle\\Model\\EmailModel',
            'pageModel' => 'Mautic\\PageBundle\\Model\\PageModel',
        ]);
    }
}
