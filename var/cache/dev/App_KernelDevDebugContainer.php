<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZK7Z6LU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZK7Z6LU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZK7Z6LU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZK7Z6LU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZK7Z6LU\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZK7Z6LU',
    'container.build_id' => 'c1df6e43',
    'container.build_time' => 1713785693,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZK7Z6LU');