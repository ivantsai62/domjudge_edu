<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSDM2tIz\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSDM2tIz/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerSDM2tIz.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerSDM2tIz\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerSDM2tIz\srcApp_KernelProdContainer([
    'container.build_hash' => 'SDM2tIz',
    'container.build_id' => 'cb0e2bb0',
    'container.build_time' => 1637922790,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSDM2tIz');
