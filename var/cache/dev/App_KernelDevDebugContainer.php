<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNq4Kv7i\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNq4Kv7i/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNq4Kv7i.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNq4Kv7i\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNq4Kv7i\App_KernelDevDebugContainer([
    'container.build_hash' => 'Nq4Kv7i',
    'container.build_id' => '01220627',
    'container.build_time' => 1656869808,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNq4Kv7i');