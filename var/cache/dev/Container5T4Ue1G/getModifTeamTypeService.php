<?php

namespace Container5T4Ue1G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getModifTeamTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ModifTeamType' shared autowired service.
     *
     * @return \App\Form\ModifTeamType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ModifTeamType.php';

        return $container->privates['App\\Form\\ModifTeamType'] = new \App\Form\ModifTeamType();
    }
}
