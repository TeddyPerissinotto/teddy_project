<?php

namespace Container1SrYcje;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSliderControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\SliderController' shared autowired service.
     *
     * @return \App\Controller\Admin\SliderController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'SliderController.php';

        $container->services['App\\Controller\\Admin\\SliderController'] = $instance = new \App\Controller\Admin\SliderController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\Admin\\SliderController', $container));

        return $instance;
    }
}
