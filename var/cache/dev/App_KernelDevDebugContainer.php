<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIsvuk5M\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIsvuk5M/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIsvuk5M.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIsvuk5M\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIsvuk5M\App_KernelDevDebugContainer([
    'container.build_hash' => 'Isvuk5M',
    'container.build_id' => '6f97bf46',
    'container.build_time' => 1639328078,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIsvuk5M');