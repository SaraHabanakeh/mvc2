<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXVDHOz6\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXVDHOz6/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerXVDHOz6.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerXVDHOz6\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerXVDHOz6\App_KernelTestDebugContainer([
    'container.build_hash' => 'XVDHOz6',
    'container.build_id' => '44725089',
    'container.build_time' => 1717431186,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXVDHOz6');
