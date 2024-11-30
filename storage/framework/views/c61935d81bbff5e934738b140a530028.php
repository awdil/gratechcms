<?php $__env->startSection('content'); ?>        <?php echo $__env->yieldContent('user_header'); ?>    <div class="card px-3 py-4">        <ul class="nav nav-pills bg-gray-100 mx-2">                        <?php $__currentLoopData = config('admin_menus')[1]['menus'][0]['sub_menus']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                <li class="nav-item  pe-0">                    <a class="nav-link <?php echo e(isActive($menu['route'],$menu['params'] ?? [] )); ?>" aria-current="page" href="<?php echo e(route($menu['route'], $menu['params'] ?? [])); ?>">                        <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => ''.e($menu['icon']).'','height' => '18','width' => '18','class' => 'me-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => ''.e($menu['icon']).'','height' => '18','width' => '18','class' => 'me-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?> <?php echo e(title($menu['label'])); ?>                    </a>                </li>            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        </ul>        <div>                        <?php echo $__env->yieldContent('user_content'); ?>        </div>    </div><?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/user/index.blade.php ENDPATH**/ ?>