<?php

namespace ContainerVEDL1to;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Fixtures_LoaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.fixtures.loader' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/DataFixtures/ContainerAwareLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Loader/SymfonyFixturesLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Fixture.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/PersonnaliteFixture.php';

        $container->privates['doctrine.fixtures.loader'] = $instance = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($container);

        $instance->addFixtures([0 => ['fixture' => ($container->privates['App\\DataFixtures\\AppFixtures'] ?? $container->load('getAppFixturesService')), 'groups' => []], 1 => ['fixture' => ($container->privates['App\\DataFixtures\\PersonnaliteFixture'] ??= new \App\DataFixtures\PersonnaliteFixture()), 'groups' => [0 => 'personnalite']]]);

        return $instance;
    }
}
