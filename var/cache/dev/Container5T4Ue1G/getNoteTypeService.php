<?php

namespace Container5T4Ue1G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNoteTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\NoteType' shared autowired service.
     *
     * @return \App\Form\NoteType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/NoteType.php';

        return $container->privates['App\\Form\\NoteType'] = new \App\Form\NoteType();
    }
}
