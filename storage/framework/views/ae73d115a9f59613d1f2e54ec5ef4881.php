<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse " data-simplebar>
    <div class="sidebar-inner px-3 pt-3">
        <?php echo $__env->make('backend.layouts.partials._sidebar_user_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <ul class="nav flex-column pt-3 pt-md-0">
            
            <li class="nav-item d-none d-md-block mb-3">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link d-flex align-items-center">
                    <span class="">
                        <img src="<?php echo e(asset(setting('light_logo'))); ?>" height="40" alt="Volt Logo">
                    </span>
                </a>
            </li>

            
            <?php $__currentLoopData = config('admin_menus'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php
                    // Collect all permissions from menus and submenus
                    $permissions = collect($element['menus'])
                        ->flatMap(function ($menu) {
                            return $menu['type'] == 'single'
                                ? [$menu['permission']]
                                : collect($menu['sub_menus'])->pluck('permission')->toArray();
                        })
                        ->unique()
                        ->toArray(); // Convert collection back to an array
                ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any($permissions)): ?>
                    <?php if(isset($element['label'])): ?>
                        <p class="nav-label"><?php echo e(Str::title($element['label'])); ?></p>
                    <?php endif; ?>
                <?php endif; ?>
                <?php $__currentLoopData = $element['menus']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($menu['type'] == 'single'): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($menu['permission'])): ?>
                            <li class="nav-item <?php echo e(isActive($menu['route'],$menu['params'] ?? [])); ?> <?php if(isset($menu['class'])): ?> <?php echo e($menu['class']); ?> <?php endif; ?>">
                                <a href="<?php echo e(route($menu['route'],$menu['params'] ?? [])); ?>"
                                   class="nav-link d-flex align-items-center">
                                <span class="sidebar-icon">
                                     <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => ''.e($menu['icon']).'','height' => '20','width' => '20'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $attributes = $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $component = $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
                                </span>
                                    <span class="sidebar-text m-0 p-0">
                                    <?php echo e(__($menu['label'])); ?>

                                        <?php if(isset($menu['badge'])): ?>
                                            <span class="badge badge-sm bg-secondary ms-1 text-gray-800">
                                            <?php echo e(__($menu['badge'])); ?>

                                        </span>
                                        <?php endif; ?>
                                </span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(array_column($menu['sub_menus'],'permission'))): ?>
                            <li class="nav-item">
                                <a href="#<?php echo e(Str::kebab($menu['label'])); ?>"
                                   class="nav-link d-flex justify-content-between align-items-center collapsed"
                                   data-bs-toggle="collapse" data-bs-target="#<?php echo e(Str::kebab($menu['label'])); ?>"
                                   aria-expanded="<?php echo e(isActive(array_column($menu['sub_menus'], 'route')) ? 'true' : 'false'); ?>">
                                <span class="d-flex align-items-center">
                                    <span class="sidebar-icon">
                                        <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => ''.e($menu['icon']).'','height' => '20','width' => '20'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $attributes = $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $component = $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
                                    </span>
                                    <span class="sidebar-text"><?php echo e(__($menu['label'])); ?></span>
                                </span>
                                    <span class="link-arrow">
                                    <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'arrow-right'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $attributes = $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $component = $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
                                </span>
                                </a>
                                <div id="<?php echo e(Str::kebab($menu['label'])); ?>"
                                     class="multi-level collapse <?php echo e(isActive(array_column($menu['sub_menus'], 'route'), null, 'show')); ?>">
                                    <ul class="flex-column nav">
                                        <?php $__currentLoopData = $menu['sub_menus']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($subMenu['permission'])): ?>
                                                <li class="nav-item <?php echo e(isActive($subMenu['route'], $subMenu['params'] ?? [])); ?>">
                                                    <a href="<?php echo e(route($subMenu['route'], $subMenu['params'] ?? [])); ?>"
                                                       class="nav-link d-flex align-items-center px-3 py-2">
                                                <span class="sub-icon">
                                                    <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'sub','width' => '20','height' => '20'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $attributes = $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $component = $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
                                                </span>
                                                        <span class="sidebar-text sidebar-sub-text mx-1"><?php echo e(__($subMenu['label'])); ?></span>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</nav>


<?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/layouts/partials/_sidebar.blade.php ENDPATH**/ ?>