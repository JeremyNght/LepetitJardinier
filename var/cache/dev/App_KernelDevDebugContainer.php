<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFgxizBC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFgxizBC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFgxizBC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFgxizBC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFgxizBC\App_KernelDevDebugContainer([
    'container.build_hash' => 'FgxizBC',
    'container.build_id' => '5ed767ea',
    'container.build_time' => 1645965267,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFgxizBC');
