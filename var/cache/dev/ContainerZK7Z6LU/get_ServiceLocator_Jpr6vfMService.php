<?php

namespace ContainerZK7Z6LU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jpr6vfMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jpr6vfM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jpr6vfM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'videoGameRepository' => ['privates', 'App\\Repository\\VideoGameRepository', 'getVideoGameRepositoryService', true],
        ], [
            'videoGameRepository' => 'App\\Repository\\VideoGameRepository',
        ]);
    }
}
