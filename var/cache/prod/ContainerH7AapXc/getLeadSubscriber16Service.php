<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadSubscriber16Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\StageBundle\EventListener\LeadSubscriber' shared autowired service.
     *
     * @return \Mautic\StageBundle\EventListener\LeadSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\StageBundle\\EventListener\\LeadSubscriber'])) {
            return $container->services['Mautic\\StageBundle\\EventListener\\LeadSubscriber'];
        }

        return $container->services['Mautic\\StageBundle\\EventListener\\LeadSubscriber'] = new \Mautic\StageBundle\EventListener\LeadSubscriber(($container->services['Mautic\\LeadBundle\\Entity\\StagesChangeLogRepository'] ?? $container->load('getStagesChangeLogRepositoryService')), ($container->services['Mautic\\StageBundle\\Entity\\LeadStageLogRepository'] ?? $container->load('getLeadStageLogRepositoryService')), ($container->services['translator'] ?? $container->getTranslator2Service()), $a);
    }
}
