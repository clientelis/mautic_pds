<?php

namespace ContainerH7AapXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_Messenger_RestartWorkersSignalService extends AppKernelProdContainer
{
    /*
     * Gets the private 'cache.messenger.restart_workers_signal' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['cache.messenger.restart_workers_signal'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('igp6Vx8yxr', 0, ($container->targetDir.''.'/pools/app'), ($container->privates['cache.default_marshaller'] ?? ($container->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL, false))));

        $instance->setLogger(($container->privates['monolog.logger.cache'] ?? $container->getMonolog_Logger_CacheService()));

        return $instance;
    }
}
