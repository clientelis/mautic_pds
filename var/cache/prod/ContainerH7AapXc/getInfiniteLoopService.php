<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInfiniteLoopService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Form\Validator\Constraints\InfiniteLoop' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Form\Validator\Constraints\InfiniteLoop
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Form\\Validator\\Constraints\\InfiniteLoop'] = new \Mautic\CampaignBundle\Form\Validator\Constraints\InfiniteLoop();
    }
}