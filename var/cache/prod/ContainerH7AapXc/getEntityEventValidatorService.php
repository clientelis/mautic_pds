<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntityEventValidatorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Validator\EntityEventValidator' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Validator\EntityEventValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\CoreBundle\\Validator\\EntityEventValidator'])) {
            return $container->services['Mautic\\CoreBundle\\Validator\\EntityEventValidator'];
        }

        return $container->services['Mautic\\CoreBundle\\Validator\\EntityEventValidator'] = new \Mautic\CoreBundle\Validator\EntityEventValidator($a);
    }
}
