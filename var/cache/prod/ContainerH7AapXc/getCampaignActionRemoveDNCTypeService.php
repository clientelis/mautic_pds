<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignActionRemoveDNCTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\CampaignActionRemoveDNCType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\CampaignActionRemoveDNCType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Type\\CampaignActionRemoveDNCType'] = new \Mautic\LeadBundle\Form\Type\CampaignActionRemoveDNCType();
    }
}