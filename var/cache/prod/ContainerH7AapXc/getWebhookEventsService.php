<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebhookEventsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\WebhookBundle\WebhookEvents' shared autowired service.
     *
     * @return \Mautic\WebhookBundle\WebhookEvents
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\WebhookBundle\\WebhookEvents'] = new \Mautic\WebhookBundle\WebhookEvents();
    }
}
