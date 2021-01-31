<?php

namespace ContainerIZJYmB4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PtI9rupService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ptI9rup' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ptI9rup'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jugador' => ['privates', '.errored..service_locator.ptI9rup.App\\Entity\\Jugador', NULL, 'Cannot autowire service ".service_locator.ptI9rup": it references class "App\\Entity\\Jugador" but no such service exists.'],
        ], [
            'jugador' => 'App\\Entity\\Jugador',
        ]);
    }
}
