<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtmTagRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Entity\UtmTagRepository' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Entity\UtmTagRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Entity\\UtmTagRepository'] = new \Mautic\LeadBundle\Entity\UtmTagRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
