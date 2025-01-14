<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_TypedPropertiesDriverService extends AppKernelProdContainer
{
    /*
     * Gets the private 'jms_serializer.metadata.typed_properties_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\TypedPropertiesDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser()));

        return $container->privates['jms_serializer.metadata.typed_properties_driver'] = new \JMS\Serializer\Metadata\Driver\TypedPropertiesDriver(new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(($container->services['Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver'] ?? ($container->services['Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver'] = new \Mautic\ApiBundle\Serializer\Driver\ApiMetadataDriver())), ($container->services['doctrine'] ?? $container->getDoctrineService()), $a), $a);
    }
}
