<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignEventFormFieldValueTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Form\Type\CampaignEventFormFieldValueType' shared autowired service.
     *
     * @return \Mautic\FormBundle\Form\Type\CampaignEventFormFieldValueType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\FormBundle\\Model\\FormModel'] ?? $container->getFormModelService());

        if (isset($container->services['Mautic\\FormBundle\\Form\\Type\\CampaignEventFormFieldValueType'])) {
            return $container->services['Mautic\\FormBundle\\Form\\Type\\CampaignEventFormFieldValueType'];
        }

        return $container->services['Mautic\\FormBundle\\Form\\Type\\CampaignEventFormFieldValueType'] = new \Mautic\FormBundle\Form\Type\CampaignEventFormFieldValueType($a);
    }
}
