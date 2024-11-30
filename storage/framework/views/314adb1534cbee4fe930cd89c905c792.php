
<?php $__env->startSection('title'); ?>
	<?php echo e(__('Create Component')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="py-4">
		<div class="d-flex justify-content-between w-100 flex-wrap">
			<div class="mb-3 mb-lg-0">
				<h1 class="h4"><?php echo e(__('Create Text Component')); ?></h1>
			</div>
			<div class="btn-toolbar  mb-md-0 mb-2 ">
				<a href="<?php echo e(route('admin.page.component.index')); ?>" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
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
				<h2 class="h5 mb-4"><?php echo e(__('Dynamic Component')); ?></h2>
				<form method="POST" action="<?php echo e(route('admin.page.component.store')); ?>" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div>
								<label for="icon"><?php echo e(__('Component Icon')); ?></label>
								<?php if (isset($component)) { $__componentOriginal9f066b104e9feebb8635e3779fc3f022 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f066b104e9feebb8635e3779fc3f022 = $attributes; } ?>
<?php $component = App\View\Components\ImgUp::resolve(['name' => 'icon'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('img-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ImgUp::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f066b104e9feebb8635e3779fc3f022)): ?>
<?php $attributes = $__attributesOriginal9f066b104e9feebb8635e3779fc3f022; ?>
<?php unset($__attributesOriginal9f066b104e9feebb8635e3779fc3f022); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f066b104e9feebb8635e3779fc3f022)): ?>
<?php $component = $__componentOriginal9f066b104e9feebb8635e3779fc3f022; ?>
<?php unset($__componentOriginal9f066b104e9feebb8635e3779fc3f022); ?>
<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="row">
						
						<div class="col-md-6 mb-3">
							<div>
								<label for="name"><?php echo e(__('Component Name')); ?></label>
								<input class="form-control" name="name" value="<?php echo e(old('name')); ?>" id="name" type="text" placeholder="Enter Component name" required>
							</div>
						</div>
						<div class="col-md-12 mb-3">
							<div>
								<label for="content"><?php echo e(__('Component Content')); ?></label>
								<textarea class="form-control summernote" name="content" id="content" rows="3"><?php echo e(old('content')); ?></textarea>
							</div>
						</div>
						<div class="col-md-6 mb-3 mt-2">
							<div>
								<div class="form-check form-switch">
									<label class="form-check-label" for="status"><?php echo e(__('Component Status')); ?></label>
									<i data-bs-toggle="tooltip"
									   data-bs-placement="top"
									   title="<?php echo e(__('When status is active, component will be visible in Page Manager')); ?>"
									   class="mx-1 fa-solid fa-circle-info">
									</i>
									<input class="form-check-input" type="checkbox" value="1" checked name="status" id="status">
								</div>
							</div>
						</div>
					
					</div>
					<div class="mt-3">
						<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><?php echo e(__( "Create Component")); ?></button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/page/component/create.blade.php ENDPATH**/ ?>