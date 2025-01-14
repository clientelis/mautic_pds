<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportSubscriber9Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\EventListener\ReportSubscriber' shared autowired service.
     *
     * @return \Mautic\PageBundle\EventListener\ReportSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PageBundle\\EventListener\\ReportSubscriber'] = new \Mautic\PageBundle\EventListener\ReportSubscriber(($container->services['Mautic\\LeadBundle\\Model\\CompanyReportData'] ?? $container->load('getCompanyReportDataService')), ($container->services['Mautic\\PageBundle\\Entity\\HitRepository'] ?? $container->load('getHitRepositoryService')), ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
