<?php

namespace ContainerABLqZBz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_657b3tRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.657b3tR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.657b3tR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jugadorRepository' => ['privates', 'App\\Repository\\JugadorRepository', 'getJugadorRepositoryService', true],
            'torneig' => ['privates', '.errored..service_locator.657b3tR.App\\Entity\\Torneig', NULL, 'Cannot autowire service ".service_locator.657b3tR": it references class "App\\Entity\\Torneig" but no such service exists.'],
            'torneigRepository' => ['privates', 'App\\Repository\\TorneigRepository', 'getTorneigRepositoryService', true],
        ], [
            'jugadorRepository' => 'App\\Repository\\JugadorRepository',
            'torneig' => 'App\\Entity\\Torneig',
            'torneigRepository' => 'App\\Repository\\TorneigRepository',
        ]);
    }
}
