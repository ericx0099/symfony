<?php

namespace ContainerZT4k17B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B6HzPCZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B6HzPCZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B6HzPCZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'torneigRepository' => ['privates', 'App\\Repository\\TorneigRepository', 'getTorneigRepositoryService', true],
        ], [
            'torneigRepository' => 'App\\Repository\\TorneigRepository',
        ]);
    }
}
