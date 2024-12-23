<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Social_Helper_CampaignService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.social.helper.campaign' shared service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Helper\CampaignEventHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['mautic.social.helper.campaign'])) {
            return $container->services['mautic.social.helper.campaign'];
        }
        $b = ($container->services['Mautic\\PageBundle\\Model\\TrackableModel'] ?? $container->getTrackableModelService());

        if (isset($container->services['mautic.social.helper.campaign'])) {
            return $container->services['mautic.social.helper.campaign'];
        }
        $c = ($container->services['MauticPlugin\\MauticSocialBundle\\Model\\TweetModel'] ?? $container->load('getTweetModelService'));

        if (isset($container->services['mautic.social.helper.campaign'])) {
            return $container->services['mautic.social.helper.campaign'];
        }

        return $container->services['mautic.social.helper.campaign'] = new \MauticPlugin\MauticSocialBundle\Helper\CampaignEventHelper($a, $b, ($container->services['mautic.page.helper.token'] ?? $container->getMautic_Page_Helper_TokenService()), ($container->services['Mautic\\AssetBundle\\Helper\\TokenHelper'] ?? $container->getTokenHelperService()), $c);
    }
}
