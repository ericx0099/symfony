<?php

namespace ContainerZT4k17B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArbitreControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ArbitreController' shared autowired service.
     *
     * @return \App\Controller\ArbitreController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ArbitreController.php';

        $container->services['App\\Controller\\ArbitreController'] = $instance = new \App\Controller\ArbitreController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\ArbitreController', $container));

        return $instance;
    }
}
