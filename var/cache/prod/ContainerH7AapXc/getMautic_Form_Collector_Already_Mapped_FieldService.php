<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Form_Collector_Already_Mapped_FieldService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.form.collector.already.mapped.field' shared service.
     *
     * @return \Mautic\FormBundle\Collector\AlreadyMappedFieldCollector
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.form.collector.already.mapped.field'] = new \Mautic\FormBundle\Collector\AlreadyMappedFieldCollector(($container->services['mautic.cache.provider'] ?? $container->getMautic_Cache_ProviderService()));
    }
}
