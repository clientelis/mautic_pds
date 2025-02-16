<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportSubscriber5Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\ReportSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\ReportSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\ReportSubscriber'];
        }
        $b = ($container->services['mautic.generated.columns.provider'] ?? $container->getMautic_Generated_Columns_ProviderService());

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\ReportSubscriber'];
        }
        $c = ($container->services['mautic.lead.reportbundle.fields_builder'] ?? $container->load('getMautic_Lead_Reportbundle_FieldsBuilderService'));

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\ReportSubscriber'];
        }

        return $container->services['Mautic\\EmailBundle\\EventListener\\ReportSubscriber'] = new \Mautic\EmailBundle\EventListener\ReportSubscriber($a, ($container->services['Mautic\\LeadBundle\\Model\\CompanyReportData'] ?? $container->load('getCompanyReportDataService')), ($container->services['Mautic\\EmailBundle\\Entity\\StatRepository'] ?? $container->load('getStatRepository3Service')), ($container->services['Mautic\\EmailBundle\\Entity\\EmailRepository'] ?? $container->load('getEmailRepositoryService')), $b, $c);
    }
}
