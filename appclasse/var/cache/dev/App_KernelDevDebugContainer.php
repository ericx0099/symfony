<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCjKLBZn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCjKLBZn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCjKLBZn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCjKLBZn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCjKLBZn\App_KernelDevDebugContainer([
    'container.build_hash' => 'CjKLBZn',
    'container.build_id' => '3a8a2a45',
    'container.build_time' => 1612650143,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCjKLBZn');
