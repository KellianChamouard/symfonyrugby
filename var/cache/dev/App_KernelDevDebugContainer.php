<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7wURIMe\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7wURIMe/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7wURIMe.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7wURIMe\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7wURIMe\App_KernelDevDebugContainer([
    'container.build_hash' => '7wURIMe',
    'container.build_id' => '2e32bcce',
    'container.build_time' => 1593072713,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7wURIMe');