
<div class="cookies-wrapper light-area">
	<div class="title-box">
		<?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'cookie'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
		<h3><?php echo e(setting('cookie_title')); ?></h3>
	</div>
	<div class="info">
		<p>
			<?php echo e(setting('cookie_summary')); ?> <a href="<?php echo e(route('page', setting('cookie_page'))); ?>"> <?php echo e(__('Read more')); ?>...</a>
		</p>
	</div>
	<div class="buttons">
		<button class="button wow fadeInUp  btn-one" id="acceptBtn"><?php echo e(__('Accept')); ?></button>
		<button class="button wow fadeInUp  btn-one"><?php echo e(__('Decline')); ?></button>
	</div>
</div>


<?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/layouts/partials/_cookies.blade.php ENDPATH**/ ?>