<?php

namespace ContainerZ7NI281;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GJXMHQIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gJXMHQI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gJXMHQI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tornieg' => ['privates', '.errored..service_locator.gJXMHQI.App\\Entity\\Torneig', NULL, 'Cannot autowire service ".service_locator.gJXMHQI": it references class "App\\Entity\\Torneig" but no such service exists.'],
        ], [
            'tornieg' => 'App\\Entity\\Torneig',
        ]);
    }
}
