<?php

namespace ContainerFgxizBC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XtyMFIPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xtyMFIP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xtyMFIP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'haie' => ['privates', '.errored..service_locator.xtyMFIP.App\\Entity\\Haie', NULL, 'Cannot autowire service ".service_locator.xtyMFIP": it references class "App\\Entity\\Haie" but no such service exists.'],
        ], [
            'haie' => 'App\\Entity\\Haie',
        ]);
    }
}
