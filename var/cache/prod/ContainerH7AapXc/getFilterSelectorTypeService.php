<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilterSelectorTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Form\Type\FilterSelectorType' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Form\Type\FilterSelectorType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Form\\Type\\FilterSelectorType'] = new \Mautic\ReportBundle\Form\Type\FilterSelectorType();
    }
}
