<?php

namespace ContainerCAUbK8B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_ComponentFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.component_factory' shared service.
     *
     * @return \Symfony\UX\TwigComponent\ComponentFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-twig-component/src/ComponentFactory.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['ux.twig_component.component_factory'])) {
            return $container->privates['ux.twig_component.component_factory'];
        }

        return $container->privates['ux.twig_component.component_factory'] = new \Symfony\UX\TwigComponent\ComponentFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'blog_search' => [false, 'App\\Twig\\Components\\BlogSearchComponent', 'getBlogSearchComponentService', true],
        ], [
            'blog_search' => 'App\\Twig\\Components\\BlogSearchComponent',
        ]), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), $a, ['blog_search' => ['key' => 'blog_search', 'expose_public_props' => true, 'attributes_var' => 'attributes', 'live' => true, 'csrf' => true, 'route' => 'ux_live_component', 'service_id' => 'App\\Twig\\Components\\BlogSearchComponent', 'class' => 'App\\Twig\\Components\\BlogSearchComponent', 'template' => 'components/blog_search.html.twig']]);
    }
}