<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZpTt2ki\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZpTt2ki/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZpTt2ki.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZpTt2ki\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZpTt2ki\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZpTt2ki',
    'container.build_id' => 'dd080aa2',
    'container.build_time' => 1641425817,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZpTt2ki');
