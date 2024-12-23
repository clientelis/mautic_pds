<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailchimpTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticEmailMarketingBundle\Form\Type\MailchimpType' shared autowired service.
     *
     * @return \MauticPlugin\MauticEmailMarketingBundle\Form\Type\MailchimpType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['MauticPlugin\\MauticEmailMarketingBundle\\Form\\Type\\MailchimpType'])) {
            return $container->services['MauticPlugin\\MauticEmailMarketingBundle\\Form\\Type\\MailchimpType'];
        }
        $b = ($container->services['Mautic\\PluginBundle\\Model\\PluginModel'] ?? $container->getPluginModelService());

        if (isset($container->services['MauticPlugin\\MauticEmailMarketingBundle\\Form\\Type\\MailchimpType'])) {
            return $container->services['MauticPlugin\\MauticEmailMarketingBundle\\Form\\Type\\MailchimpType'];
        }

        return $container->services['MauticPlugin\\MauticEmailMarketingBundle\\Form\\Type\\MailchimpType'] = new \MauticPlugin\MauticEmailMarketingBundle\Form\Type\MailchimpType($a, $b, ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
