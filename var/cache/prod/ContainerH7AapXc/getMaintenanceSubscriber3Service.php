<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaintenanceSubscriber3Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\EventListener\MaintenanceSubscriber' shared autowired service.
     *
     * @return \Mautic\PageBundle\EventListener\MaintenanceSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\MaintenanceSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\MaintenanceSubscriber'];
        }

        return $container->services['Mautic\\PageBundle\\EventListener\\MaintenanceSubscriber'] = new \Mautic\PageBundle\EventListener\MaintenanceSubscriber($a, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
