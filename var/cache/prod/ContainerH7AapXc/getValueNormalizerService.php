<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValueNormalizerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\IntegrationsBundle\Sync\ValueNormalizer\ValueNormalizer' shared autowired service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\ValueNormalizer\ValueNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\IntegrationsBundle\\Sync\\ValueNormalizer\\ValueNormalizer'] = new \Mautic\IntegrationsBundle\Sync\ValueNormalizer\ValueNormalizer();
    }
}
