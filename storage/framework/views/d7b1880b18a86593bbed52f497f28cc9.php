<?php use App\Constants\Component; ?>

<?php $__env->startSection('title'); ?>
	<?php echo e(__('Component Page')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="py-4">
		<div class="d-flex justify-content-between flex-wrap w-100">
			<div class="mb-2 mb-lg-0">
				<h1 class="h4"><?php echo e(__('Component Page')); ?></h1>
			</div>
			<div class="btn-toolbar mb-1 mb-md-0 d-flex flex-wrap justify-content-end">
				<a href="<?php echo e(route('admin.page.component.create')); ?>" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
					<?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
					<?php echo e(__('Create')); ?>

				</a>
			</div>
		</div>
	</div>
	
	<div class="card border-0 shadow mb-4">
		<div class="card-body">
			<form action="<?php echo e(route('admin.page.component.index')); ?>" method="get" class="mb-4">
				<div class="d-flex flex-column flex-md-row align-items-md-end justify-content-md-end">
					<div class="d-flex">
						<select class="form-select custom-select-200 mb-2 me-1  mb-md-0 me-md-2" name="component_display" id="component-display1" aria-label="Default select example">
							<?php $__currentLoopData = $display; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option <?php if($currentDisplay == $key): ?> selected <?php endif; ?> value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						<select class="form-select custom-select-200  mb-2 me-1 mb-md-0   me-md-2" name="component_category" id="component-category" aria-label="Default select example">
							<option value="all"><?php echo e(__('All Categories')); ?></option>
							<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option <?php if($currentCategory == $category): ?> selected <?php endif; ?> value="<?php echo e($category); ?>"><?php echo e(ucfirst($category)); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					<div class="btn-toolbar  mb-md-0">
						<button type="submit" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
							<?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'filter'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
							<?php echo e(__('Filter Now')); ?>

						</button>
					</div>
				</div>
			</form>
			
			
			<?php echo $__env->make('backend.page.component.partial._'.$currentDisplay, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script>
        $(document).ready(function () {
            'use strict';

            const deleteElements = $('.delete');  // Cache the selector
            deleteElements.on('click', function (event) {
                event.preventDefault();
                const id = $(this).data('id');
                let url = '<?php echo e(route("admin.page.component.destroy", ["component" => ":id"])); ?>'.replace(':id', id)
                deleteItem(url);
            });
        });
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/page/component/index.blade.php ENDPATH**/ ?>