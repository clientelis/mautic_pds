<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDetermineWinnerSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\DetermineWinnerSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\DetermineWinnerSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\DetermineWinnerSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\DetermineWinnerSubscriber'];
        }

        return $container->services['Mautic\\EmailBundle\\EventListener\\DetermineWinnerSubscriber'] = new \Mautic\EmailBundle\EventListener\DetermineWinnerSubscriber($a, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}