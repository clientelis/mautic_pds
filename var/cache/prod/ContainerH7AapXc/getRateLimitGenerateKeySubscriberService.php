<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRateLimitGenerateKeySubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ApiBundle\EventListener\RateLimitGenerateKeySubscriber' shared autowired service.
     *
     * @return \Mautic\ApiBundle\EventListener\RateLimitGenerateKeySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ApiBundle\\EventListener\\RateLimitGenerateKeySubscriber'] = new \Mautic\ApiBundle\EventListener\RateLimitGenerateKeySubscriber(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
