<div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-2">
	<div class="d-flex align-items-center">
		<a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link d-flex align-items-center d-md-none">
			<img src="<?php echo e(asset(setting('light_logo'))); ?>" height="40" alt="Volt Logo">
		</a>
	</div>
	<div class="collapse-close d-md-none">
		<a href="#sidebarMenu" data-bs-toggle="collapse"
		   data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
		   aria-label="Toggle navigation">
			<?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'close'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
		</a>
	</div>
</div><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/layouts/partials/_sidebar_user_card.blade.php ENDPATH**/ ?>