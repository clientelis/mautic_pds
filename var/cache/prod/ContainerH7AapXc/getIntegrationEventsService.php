<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIntegrationEventsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\IntegrationsBundle\IntegrationEvents' shared autowired service.
     *
     * @return \Mautic\IntegrationsBundle\IntegrationEvents
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\IntegrationsBundle\\IntegrationEvents'] = new \Mautic\IntegrationsBundle\IntegrationEvents();
    }
}
