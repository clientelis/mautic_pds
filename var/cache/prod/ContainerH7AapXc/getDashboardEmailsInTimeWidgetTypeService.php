<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardEmailsInTimeWidgetTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Form\Type\DashboardEmailsInTimeWidgetType' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Form\Type\DashboardEmailsInTimeWidgetType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Form\\Type\\DashboardEmailsInTimeWidgetType'] = new \Mautic\EmailBundle\Form\Type\DashboardEmailsInTimeWidgetType();
    }
}