<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSAZdHlq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSAZdHlq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSAZdHlq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSAZdHlq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSAZdHlq\App_KernelDevDebugContainer([
    'container.build_hash' => 'SAZdHlq',
    'container.build_id' => 'b627c509',
    'container.build_time' => 1605686751,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSAZdHlq');
