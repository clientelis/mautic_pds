<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntityLookupChoiceLoaderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\ChoiceLoader\EntityLookupChoiceLoader' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\ChoiceLoader\EntityLookupChoiceLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\ChoiceLoader\\EntityLookupChoiceLoader'] = new \Mautic\CoreBundle\Form\ChoiceLoader\EntityLookupChoiceLoader(($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? $container->getModelFactoryService()), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()));
    }
}
