<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYbCY41I\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYbCY41I/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYbCY41I.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYbCY41I\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYbCY41I\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'YbCY41I',
    'container.build_id' => '064dfcea',
    'container.build_time' => 1554667941,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYbCY41I');
