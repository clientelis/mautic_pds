<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageQueueSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\MessageQueueSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\MessageQueueSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\EmailBundle\\Model\\EmailModel'] ?? $container->getEmailModelService());

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\MessageQueueSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\MessageQueueSubscriber'];
        }

        return $container->services['Mautic\\EmailBundle\\EventListener\\MessageQueueSubscriber'] = new \Mautic\EmailBundle\EventListener\MessageQueueSubscriber($a);
    }
}
