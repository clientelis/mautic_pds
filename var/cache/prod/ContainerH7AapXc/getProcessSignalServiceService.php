<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessSignalServiceService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\ProcessSignal\ProcessSignalService' shared autowired service.
     *
     * @return \Mautic\CoreBundle\ProcessSignal\ProcessSignalService
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\ProcessSignal\\ProcessSignalService'] = new \Mautic\CoreBundle\ProcessSignal\ProcessSignalService();
    }
}
