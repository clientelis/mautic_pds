<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSlotChannelFrequencyTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\Type\SlotChannelFrequencyType' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\Type\SlotChannelFrequencyType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\Type\\SlotChannelFrequencyType'] = new \Mautic\CoreBundle\Form\Type\SlotChannelFrequencyType(($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
