<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventCanvasSettingsTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Form\Type\EventCanvasSettingsType' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Form\Type\EventCanvasSettingsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Form\\Type\\EventCanvasSettingsType'] = new \Mautic\CampaignBundle\Form\Type\EventCanvasSettingsType();
    }
}
