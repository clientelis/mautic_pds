<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerH7AapXc\AppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerH7AapXc/AppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerH7AapXc.legacy');

    return;
}

if (!\class_exists(AppKernelProdContainer::class, false)) {
    \class_alias(\ContainerH7AapXc\AppKernelProdContainer::class, AppKernelProdContainer::class, false);
}

return new \ContainerH7AapXc\AppKernelProdContainer([
    'container.build_hash' => 'H7AapXc',
    'container.build_id' => '7d0a6283',
    'container.build_time' => 1734955370,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerH7AapXc');
