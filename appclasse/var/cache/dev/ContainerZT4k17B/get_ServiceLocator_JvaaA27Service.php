<?php

namespace ContainerZT4k17B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JvaaA27Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jvaaA27' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jvaaA27'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jugadorRepository' => ['privates', 'App\\Repository\\JugadorRepository', 'getJugadorRepositoryService', true],
            'torneig' => ['privates', '.errored..service_locator.jvaaA27.App\\Entity\\Torneig', NULL, 'Cannot autowire service ".service_locator.jvaaA27": it references class "App\\Entity\\Torneig" but no such service exists.'],
        ], [
            'jugadorRepository' => 'App\\Repository\\JugadorRepository',
            'torneig' => 'App\\Entity\\Torneig',
        ]);
    }
}
