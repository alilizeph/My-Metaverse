<?php

namespace ContainerBw1Nl0B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PJTxOAXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PJTxOAX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PJTxOAX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cr' => ['privates', 'App\\Repository\\CommentsRepository', 'getCommentsRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.PJTxOAX.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.PJTxOAX": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'cr' => 'App\\Repository\\CommentsRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
