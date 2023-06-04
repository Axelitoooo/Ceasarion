<?php

namespace ContainerVEDL1to;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2ShI6hPService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.2ShI6hP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2ShI6hP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'logoutUrlGenerator' => ['privates', 'security.logout_url_generator', 'getSecurity_LogoutUrlGeneratorService', false],
            'user' => ['privates', '.errored..service_locator.2ShI6hP.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.2ShI6hP": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'logoutUrlGenerator' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
