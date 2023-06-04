<?php

namespace ContainerVEDL1to;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_LiveResponderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'ux.live_component.live_responder' shared service.
     *
     * @return \Symfony\UX\LiveComponent\LiveResponder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/LiveResponder.php';

        return $container->privates['ux.live_component.live_responder'] = new \Symfony\UX\LiveComponent\LiveResponder();
    }
}