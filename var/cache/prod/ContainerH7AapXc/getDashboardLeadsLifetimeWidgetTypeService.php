<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardLeadsLifetimeWidgetTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\DashboardLeadsLifetimeWidgetType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\DashboardLeadsLifetimeWidgetType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? $container->getListModelService());

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\DashboardLeadsLifetimeWidgetType'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\DashboardLeadsLifetimeWidgetType'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\DashboardLeadsLifetimeWidgetType'] = new \Mautic\LeadBundle\Form\Type\DashboardLeadsLifetimeWidgetType($a, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
