<?php

namespace ContainerMie5ewf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K4AzLHpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.k4AzLHp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.k4AzLHp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\LoginController::login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\LoginController::login()', 'getLoginControllerloginService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.g9BceMG.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\TrackController::addFavorite' => ['privates', '.service_locator.B373W1m.App\\Controller\\TrackController::addFavorite()', 'getTrackControlleraddFavoriteService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\LoginController:login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\LoginController::login()', 'getLoginControllerloginService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.g9BceMG.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\TrackController:addFavorite' => ['privates', '.service_locator.B373W1m.App\\Controller\\TrackController::addFavorite()', 'getTrackControlleraddFavoriteService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\LoginController::login' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\TrackController::addFavorite' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\LoginController:login' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\TrackController:addFavorite' => '?',
        ]);
    }
}
