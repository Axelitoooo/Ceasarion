<?php

namespace ContainerCAUbK8B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_DoctrineObjectNormalizerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'ux.live_component.doctrine_object_normalizer' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Normalizer\DoctrineObjectNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/Normalizer/DoctrineObjectNormalizer.php';

        return $container->privates['ux.live_component.doctrine_object_normalizer'] = new \Symfony\UX\LiveComponent\Normalizer\DoctrineObjectNormalizer(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['doctrine'] ?? $container->getDoctrineService());
        }, 1));
    }
}
