<?php

namespace ContainerVEDL1to;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getErrorHandler_ErrorRenderer_SerializerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'error_handler.error_renderer.serializer' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/SerializerErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/HtmlErrorRenderer.php';

        $a = ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack());

        return $container->privates['error_handler.error_renderer.serializer'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($container->privates['serializer'] ?? $container->load('getSerializerService')), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), ($container->privates['twig.error_renderer.html'] ?? $container->load('getTwig_ErrorRenderer_HtmlService')), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true));
    }
}
