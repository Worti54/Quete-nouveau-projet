<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE26AbXe\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE26AbXe/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerE26AbXe.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerE26AbXe\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerE26AbXe\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'E26AbXe',
    'container.build_id' => 'e4223a4e',
    'container.build_time' => 1541414914,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerE26AbXe');
