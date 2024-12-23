<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\Form\Type\MessageType' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\Form\Type\MessageType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\ChannelBundle\\Model\\MessageModel'] ?? $container->load('getMessageModelService'));

        if (isset($container->services['Mautic\\ChannelBundle\\Form\\Type\\MessageType'])) {
            return $container->services['Mautic\\ChannelBundle\\Form\\Type\\MessageType'];
        }

        return $container->services['Mautic\\ChannelBundle\\Form\\Type\\MessageType'] = new \Mautic\ChannelBundle\Form\Type\MessageType($a, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));
    }
}
