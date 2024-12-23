<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailToUserSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\EmailToUserSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\EmailToUserSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\EmailBundle\\Model\\SendEmailToUser'] ?? $container->load('getSendEmailToUserService'));

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\EmailToUserSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\EmailToUserSubscriber'];
        }

        return $container->services['Mautic\\EmailBundle\\EventListener\\EmailToUserSubscriber'] = new \Mautic\EmailBundle\EventListener\EmailToUserSubscriber($a);
    }
}
