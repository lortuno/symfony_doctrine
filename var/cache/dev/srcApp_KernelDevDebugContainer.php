<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerS6v0cA8\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerS6v0cA8/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerS6v0cA8.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerS6v0cA8\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerS6v0cA8\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'S6v0cA8',
    'container.build_id' => '97269d5f',
    'container.build_time' => 1554560347,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerS6v0cA8');
