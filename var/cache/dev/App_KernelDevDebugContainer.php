<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCxz221x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCxz221x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCxz221x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCxz221x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCxz221x\App_KernelDevDebugContainer([
    'container.build_hash' => 'Cxz221x',
    'container.build_id' => '95ea13a4',
    'container.build_time' => 1616885763,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCxz221x');
