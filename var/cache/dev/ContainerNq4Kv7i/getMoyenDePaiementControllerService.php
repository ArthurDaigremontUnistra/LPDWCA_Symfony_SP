<?php

namespace ContainerNq4Kv7i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMoyenDePaiementControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MoyenDePaiementController' shared autowired service.
     *
     * @return \App\Controller\MoyenDePaiementController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'MoyenDePaiementController.php';

        $container->services['App\\Controller\\MoyenDePaiementController'] = $instance = new \App\Controller\MoyenDePaiementController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\MoyenDePaiementController', $container));

        return $instance;
    }
}
