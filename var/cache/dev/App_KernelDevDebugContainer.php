<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZOit7oj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZOit7oj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZOit7oj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZOit7oj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZOit7oj\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZOit7oj',
    'container.build_id' => '43c28c2a',
    'container.build_time' => 1658842926,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZOit7oj');
