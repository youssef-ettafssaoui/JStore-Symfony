<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDIgGlpt\srcApp_KernelProdDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDIgGlpt/srcApp_KernelProdDebugContainer.php') {
    touch(__DIR__.'/ContainerDIgGlpt.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdDebugContainer::class, false)) {
    \class_alias(\ContainerDIgGlpt\srcApp_KernelProdDebugContainer::class, srcApp_KernelProdDebugContainer::class, false);
}

return new \ContainerDIgGlpt\srcApp_KernelProdDebugContainer([
    'container.build_hash' => 'DIgGlpt',
    'container.build_id' => 'd4f56c1e',
    'container.build_time' => 1627078865,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDIgGlpt');