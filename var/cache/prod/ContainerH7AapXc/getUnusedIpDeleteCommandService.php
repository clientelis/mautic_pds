<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnusedIpDeleteCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Command\UnusedIpDeleteCommand' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Command\UnusedIpDeleteCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Command\\UnusedIpDeleteCommand'] = new \Mautic\CoreBundle\Command\UnusedIpDeleteCommand(($container->services['Mautic\\LeadBundle\\Model\\IpAddressModel'] ?? $container->getIpAddressModelService()), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
