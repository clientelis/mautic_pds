<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Entity\ReportRepository' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Entity\ReportRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Entity\\ReportRepository'] = new \Mautic\ReportBundle\Entity\ReportRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
