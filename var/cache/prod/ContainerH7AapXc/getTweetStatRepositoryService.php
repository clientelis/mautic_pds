<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTweetStatRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Entity\TweetStatRepository' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Entity\TweetStatRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticSocialBundle\\Entity\\TweetStatRepository'] = new \MauticPlugin\MauticSocialBundle\Entity\TweetStatRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
