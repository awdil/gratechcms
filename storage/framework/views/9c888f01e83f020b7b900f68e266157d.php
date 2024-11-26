<?php $__env->startSection('content'); ?>        <?php echo $__env->yieldContent('support_header'); ?>    <div class="card px-3 py-4">        <ul class="nav nav-pills bg-gray-100 mx-2">                        <?php $__currentLoopData = config('admin_menus')[8]['menus'][0]['sub_menus']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                <li class="nav-item  pe-0">                    <a class="nav-link <?php echo e(isActive($menu['route'],$menu['params'] ?? [] )); ?>" aria-current="page" href="<?php echo e(route($menu['route'], $menu['params'] ?? [])); ?>">                        <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => ''.e($menu['icon']).'','height' => '18','width' => '18','class' => 'me-1'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php endif; ?> <?php echo e(title($menu['label'])); ?>                    </a>                </li>            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        </ul>        <div>                        <?php echo $__env->yieldContent('support_content'); ?>        </div>    </div><?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/support_ticket/index.blade.php ENDPATH**/ ?>