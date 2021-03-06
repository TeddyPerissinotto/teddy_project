<?php

namespace ContainerIsvuk5M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YuONzANService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yuONzAN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yuONzAN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sliderRepository' => ['privates', 'App\\Repository\\SliderRepository', 'getSliderRepositoryService', true],
        ], [
            'sliderRepository' => 'App\\Repository\\SliderRepository',
        ]);
    }
}
