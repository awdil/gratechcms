
<?php echo $__env->make('frontend.layouts.partials._cursor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<header class="header-area header-two-area">
    <div class="container header__container">
        <div class="header__main">
            <a href="<?php echo e(route('home')); ?>" class="logo">
                <img src="<?php echo e(asset(setting('light_logo'))); ?>" alt="logo">
            </a>
            <div class="main-menu">
                <nav>
                    <ul>
                        <?php $__currentLoopData = $navigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navigation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e($navigation->slug == '/' ? route('home') : $navigation->slug); ?>"
                                   target="<?php echo e($navigation->target); ?>"><?php echo e(_tr($navigation->name)); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </nav>
            </div>
            <div class="d-none d-xl-flex gap-4">

                <?php if(auth()->check()): ?>
                    <a href="<?php echo e(route('user.dashboard')); ?>" class="btn-one"><?php echo e(__('Dashboard')); ?> <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="btn-one"><?php echo e(__('Login')); ?> <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                <?php endif; ?>


                <div class="about-three__left-item d-flex flex-wrap gap-2 align-items-center">
                    <div class="about-call-icon">
                        <span><?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'call'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php endif; ?></span>
                    </div>
                    <div class="info">
                        <span class="sm-font fw-600 text-white"><?php echo e(__('Call Us')); ?></span>
                        <h5 class="text-white"><?php echo e(trim(explode(',', $contactInfo->content->contact_number->value)[0])); ?></h5>
                    </div>
                </div>


            </div>
            <?php if(setting('language_visibility')): ?>
                <div class="about-three__left-item d-flex flex-wrap gap-2 align-items-center light-area d-none d-lg-block">
                    <select name="locale" class="light-area"
                            onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option class="light-area"
                                    value="<?php echo e(route('locale-set', $language->code)); ?>" <?php if($language->code == app()->getLocale()): echo 'selected'; endif; ?>><?php echo e($language->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            <?php endif; ?>
            <div class="bars d-block d-lg-none">
                <i id="openButton" class="fa-solid fa-bars"></i>
            </div>
        </div>
    </div>
</header>

<?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/layouts/partials/_header_style_1.blade.php ENDPATH**/ ?>