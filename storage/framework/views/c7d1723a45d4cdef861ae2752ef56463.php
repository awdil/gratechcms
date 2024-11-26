<div class="navbar-nav flex-row order-md-last">    <?php if(setting('language_visibility')): ?>        <li class="nav-item dropdown me-3">            <select name="locale" class="form-select"  onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                    <option value="<?php echo e(route('locale-set', $language->code)); ?>" <?php if($language->code == app()->getLocale()): echo 'selected'; endif; ?>><?php echo e($language->name); ?></option>                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            </select>        </li>    <?php endif; ?>    <?php echo $__env->make('frontend.layouts.user.partials._notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    <div class="nav-item dropdown">        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"           aria-label="Open user menu">                    <span class="avatar avatar-sm"                          style="background-image: url(<?php echo e(asset(auth()->user()->avatar)); ?>)"></span>            <div class="d-none d-xl-block ps-2">                <div><?php echo e(auth()->user()->full_name); ?></div>                <div class="mt-1 small text-secondary">                  <?php echo e(__('Balance:')); ?> <?php echo e(auth()->user()->balance . ' ' . setting('site_currency')); ?>                </div>            </div>        </a>        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" data-bs-theme="light">            <div class="d-xl-none  dropdown-item align-items-center bg-gray-700">                <div class="me-2">                    <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'wallet','class' => 'icon'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php endif; ?>                </div>                <div class="flex-fill">                    <div class="fw-semibold"><?php echo e(__('Balance:')); ?> <?php echo e(auth()->user()->balance . ' ' . setting('site_currency')); ?></div>                </div>            </div>            <a href="<?php echo e(route('user.subscription.my')); ?>" class="dropdown-item d-flex align-items-center">                <div class="me-2">                    <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'subscription','class' => 'icon text-muted'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php endif; ?>                </div>                <div class="flex-fill">                    <div class="fw-semibold text-muted"><?php echo e(__('My Subscription')); ?></div>                </div>            </a>            <a href="<?php echo e(route('user.profile.index')); ?>" class="dropdown-item">                <i class="fa-solid fa-user-gear me-2 text-muted"></i>                <?php echo e(__('Settings')); ?>            </a>            <form action="<?php echo e(route('logout')); ?>" method="POST">                <?php echo csrf_field(); ?>                <button type="submit" class="dropdown-item">                    <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'logout'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php endif; ?> <?php echo e(__('Logout')); ?></button>            </form>        </div>    </div></div><?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/layouts/user/partials/_navbar_end_options.blade.php ENDPATH**/ ?>