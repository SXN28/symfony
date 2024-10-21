<?php

namespace ContainerMie5ewf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthSpotifyServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\AuthSpotifyService' shared autowired service.
     *
     * @return \App\Service\AuthSpotifyService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'AuthSpotifyService.php';

        return $container->privates['App\\Service\\AuthSpotifyService'] = new \App\Service\AuthSpotifyService(($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), $container->getEnv('SPOTIFY_CLIENT_ID'), $container->getEnv('SPOTIFY_CLIENT_SECRET'));
    }
}
