<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStageModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\StageBundle\Model\StageModel' shared autowired service.
     *
     * @return \Mautic\StageBundle\Model\StageModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\StageBundle\\Model\\StageModel'])) {
            return $container->services['Mautic\\StageBundle\\Model\\StageModel'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\StageBundle\\Model\\StageModel'])) {
            return $container->services['Mautic\\StageBundle\\Model\\StageModel'];
        }
        $c = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\StageBundle\\Model\\StageModel'])) {
            return $container->services['Mautic\\StageBundle\\Model\\StageModel'];
        }

        return $container->services['Mautic\\StageBundle\\Model\\StageModel'] = new \Mautic\StageBundle\Model\StageModel($a, ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $b, $c, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
