<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSlotSuccessMessageTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\Type\SlotSuccessMessageType' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\Type\SlotSuccessMessageType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\Type\\SlotSuccessMessageType'] = new \Mautic\CoreBundle\Form\Type\SlotSuccessMessageType();
    }
}
