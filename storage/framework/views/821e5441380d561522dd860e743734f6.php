<?php $__env->startSection('title', __('Custom ').ucwords($data->type)); ?>

<?php $__env->startPush('style'); ?>
	<link href="<?php echo e(asset('backend/css/codemirror.css')); ?>" rel='stylesheet'>
	<link href="<?php echo e(asset('backend/css/ayu-dark.css')); ?>" rel='stylesheet'>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<div class="py-4">
		<div class="d-flex justify-content-between w-100 flex-wrap">
			<div class="mb-3 mb-lg-0">
				<h1 class="h4"><?php echo e(__('Custom ').ucwords($data->type)); ?></h1>
			</div>
			<div class="btn-toolbar  mb-md-0 mb-2 ">
				<a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
					<?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'back'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
					<?php echo e(__('Back')); ?>

				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-xl-12">
			<div class="card card-body border-0 shadow mb-4">
				<p class="text-muted small"><?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'info'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php endif; ?> <?php echo e($data->notify); ?></p>
				
				<form method="POST" action="<?php echo e(route('admin.custom.update.type')); ?>" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<input type="hidden" name="type" value="<?php echo e($data->type); ?>">
					<div class="row mt-2">
						<div class="col-md-12 mb-3">
							<label for="css"><?php echo e(__('Write ').ucwords($data->type)); ?></label>
							<textarea name="value" id="css" class="form-control editorContainer" rows="10"><?php echo e($data->value); ?></textarea>
						</div>
						
						<div class="col-md-6 mb-3 mt-2">
							<div class="form-check form-switch">
								<label class="form-check-label" for="status"><?php echo e(__('Status')); ?></label>
								<input class="form-check-input" type="checkbox" value="1"  <?php if($data->is_active): echo 'checked'; endif; ?> name="is_active" id="status">
							</div>
						</div>
					</div>
					<div class="mt-3">
						<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><?php echo e(__('Update Now')); ?></button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
	<script src="<?php echo e(asset('backend/js/codemirror.js')); ?>"></script>
	<script src="<?php echo e(asset('backend/js/code-css.js')); ?>"></script>
	<script>
        (() => {
            'use strict';
            var editorContainer = document.querySelector('.editorContainer')

            var editor = CodeMirror.fromTextArea(editorContainer, {
                lineNumbers: true,
                mode: 'css',
                theme: 'ayu-dark',
            });
        })();
	</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/custom/index.blade.php ENDPATH**/ ?>