<?php

namespace ContainerBw1Nl0B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J8CT7pService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.J8C_T7p' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.J8C_T7p'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'videoGame' => ['privates', '.errored..service_locator.J8C_T7p.App\\Entity\\VideoGame', NULL, 'Cannot autowire service ".service_locator.J8C_T7p": it needs an instance of "App\\Entity\\VideoGame" but this type has been excluded in "config/services.yaml".'],
        ], [
            'videoGame' => 'App\\Entity\\VideoGame',
        ]);
    }
}
