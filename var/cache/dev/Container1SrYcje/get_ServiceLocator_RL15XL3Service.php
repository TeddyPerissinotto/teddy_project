<?php

namespace Container1SrYcje;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RL15XL3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RL15XL3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RL15XL3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'post' => ['privates', '.errored..service_locator.RL15XL3.App\\Entity\\Posts', NULL, 'Cannot autowire service ".service_locator.RL15XL3": it references class "App\\Entity\\Posts" but no such service exists.'],
        ], [
            'post' => 'App\\Entity\\Posts',
        ]);
    }
}
