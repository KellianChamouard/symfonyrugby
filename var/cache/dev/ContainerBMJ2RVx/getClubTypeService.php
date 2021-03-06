<?php

namespace ContainerBMJ2RVx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClubTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ClubType' shared autowired service.
     *
     * @return \App\Form\ClubType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ClubType.php';

        return $container->privates['App\\Form\\ClubType'] = new \App\Form\ClubType();
    }
}
