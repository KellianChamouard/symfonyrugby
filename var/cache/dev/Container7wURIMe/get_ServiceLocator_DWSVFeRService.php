<?php

namespace Container7wURIMe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DWSVFeRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DWSVFeR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DWSVFeR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'session' => ['services', 'session', 'getSessionService', true],
        ], [
            'authenticationUtils' => '?',
            'session' => '?',
        ]);
    }
}