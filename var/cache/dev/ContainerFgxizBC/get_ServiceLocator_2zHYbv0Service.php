<?php

namespace ContainerFgxizBC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2zHYbv0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2zHYbv0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2zHYbv0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'devi' => ['privates', '.errored..service_locator.2zHYbv0.App\\Entity\\Devis', NULL, 'Cannot autowire service ".service_locator.2zHYbv0": it references class "App\\Entity\\Devis" but no such service exists.'],
        ], [
            'devi' => 'App\\Entity\\Devis',
        ]);
    }
}
