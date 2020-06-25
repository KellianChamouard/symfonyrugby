<?php

namespace Container5T4Ue1G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_EventDispatcher_Main_EventBubblingListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.event_dispatcher.main.event_bubbling_listener' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallEventBubblingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/EventListener/FirewallEventBubblingListener.php';

        return $container->privates['security.event_dispatcher.main.event_bubbling_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallEventBubblingListener(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
