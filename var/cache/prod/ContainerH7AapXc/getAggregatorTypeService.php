<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAggregatorTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Form\Type\AggregatorType' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Form\Type\AggregatorType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Form\\Type\\AggregatorType'] = new \Mautic\ReportBundle\Form\Type\AggregatorType(($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
