<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerD4j5EmT\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerD4j5EmT/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerD4j5EmT.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerD4j5EmT\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerD4j5EmT\App_KernelProdContainer([
    'container.build_hash' => 'D4j5EmT',
    'container.build_id' => 'd9b0a23d',
    'container.build_time' => 1743512436,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerD4j5EmT');
