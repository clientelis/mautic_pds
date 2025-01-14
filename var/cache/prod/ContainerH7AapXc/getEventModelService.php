<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Model\EventModel' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Model\EventModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Mautic\\CampaignBundle\\Model\\EventModel'])) {
            return $container->services['Mautic\\CampaignBundle\\Model\\EventModel'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\CampaignBundle\\Model\\EventModel'])) {
            return $container->services['Mautic\\CampaignBundle\\Model\\EventModel'];
        }
        $c = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\CampaignBundle\\Model\\EventModel'])) {
            return $container->services['Mautic\\CampaignBundle\\Model\\EventModel'];
        }

        return $container->services['Mautic\\CampaignBundle\\Model\\EventModel'] = new \Mautic\CampaignBundle\Model\EventModel($a, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $b, $c, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
