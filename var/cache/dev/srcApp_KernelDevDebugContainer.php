<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3Ikl3x0\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3Ikl3x0/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3Ikl3x0.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3Ikl3x0\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container3Ikl3x0\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '3Ikl3x0',
    'container.build_id' => '9a52c997',
    'container.build_time' => 1552554223,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3Ikl3x0');
