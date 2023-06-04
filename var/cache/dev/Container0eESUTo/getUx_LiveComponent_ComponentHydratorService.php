<?php

namespace Container0eESUTo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_ComponentHydratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.component_hydrator' shared service.
     *
     * @return \Symfony\UX\LiveComponent\LiveComponentHydrator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/LiveComponentHydrator.php';

        return $container->privates['ux.live_component.component_hydrator'] = new \Symfony\UX\LiveComponent\LiveComponentHydrator(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['ux.live_component.doctrine_entity_hydration_extension'] ?? $container->load('getUx_LiveComponent_DoctrineEntityHydrationExtensionService'));
        }, 1), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), ($container->privates['debug.serializer'] ?? $container->load('getDebug_SerializerService')), $container->getEnv('APP_SECRET'));
    }
}
