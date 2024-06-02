<?php

namespace ContainerMwMTxww;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SRz9dZNService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.sRz9dZN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sRz9dZN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\BookController::book' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController::delete' => ['privates', '.service_locator.czJQNbs', 'get_ServiceLocator_CzJQNbsService', true],
            'App\\Controller\\BookController::edit' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController::new' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController::showAllBook' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController::showBook' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController::showBookByIsbn' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\BookController:book' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController:delete' => ['privates', '.service_locator.czJQNbs', 'get_ServiceLocator_CzJQNbsService', true],
            'App\\Controller\\BookController:edit' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController:new' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController:showAllBook' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController:showBook' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController:showBookByIsbn' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\BookController::book' => '?',
            'App\\Controller\\BookController::delete' => '?',
            'App\\Controller\\BookController::edit' => '?',
            'App\\Controller\\BookController::new' => '?',
            'App\\Controller\\BookController::showAllBook' => '?',
            'App\\Controller\\BookController::showBook' => '?',
            'App\\Controller\\BookController::showBookByIsbn' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\BookController:book' => '?',
            'App\\Controller\\BookController:delete' => '?',
            'App\\Controller\\BookController:edit' => '?',
            'App\\Controller\\BookController:new' => '?',
            'App\\Controller\\BookController:showAllBook' => '?',
            'App\\Controller\\BookController:showBook' => '?',
            'App\\Controller\\BookController:showBookByIsbn' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}