<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResponsesService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Executioner\Result\Responses' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Result\Responses
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Executioner\\Result\\Responses'] = new \Mautic\CampaignBundle\Executioner\Result\Responses();
    }
}