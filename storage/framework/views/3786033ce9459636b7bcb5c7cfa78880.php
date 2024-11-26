<?php $__env->startSection('title'); ?>
	<?php echo e(__('New Page Create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<div class="py-4">
		<div class="d-flex justify-content-between w-100 flex-wrap">
			<div class="mb-3 mb-lg-0">
				<h1 class="h4"><?php echo e(__('Manage')); ?></h1>
			</div>
			<div class="btn-toolbar  mb-md-0 mb-2 ">
				<a href="<?php echo e(route('admin.page.site.index')); ?>" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
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
		<div class="col-12 col-xl-6">
			<div class="card card-body border-0 shadow mb-4">
				<div class="d-flex justify-content-between flex-wrap w-100 mb-3">
					<div class="mb-1 mb-lg-0">
						<h1 class="h4"><?php echo e(__('Component')); ?></h1>
					</div>
					<div class="btn-toolbar mb-0 d-flex flex-wrap justify-content-end">
						<select class="form-select custom-select-200 me-2 mb-2 mb-md-0" name="component_category" id="filterComponentCategory" aria-label="Default select example">
							<option value="all"><?php echo e(__('All Components')); ?></option>
							<?php $__currentLoopData = $componentCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($category); ?>"><?php echo e(ucfirst($category)); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						<a href="<?php echo e(route('admin.page.component.index')); ?>" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center mb-2 mb-md-0">
							<?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'component2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
							<?php echo e(__('Manage')); ?>

						</a>
					</div>
				</div>

				<div class="sortable-list">
					<button class="btn btn-info w-100 loading" type="button" disabled hidden="">
						<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
						<?php echo e(__('Loading')); ?>...
					</button>
					<span id="componentList">
						<?php echo $__env->make('backend.page.component.partial._filter_component',['componentsAvailable' => $components,'pageId' => 0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</span>

				</div>

			</div>
		</div>
		<div class="col-12 col-xl-6">
			<div class="card card-body border-0 shadow mb-4">

				<form method="POST" action="<?php echo e(route('admin.page.site.store')); ?>">
					<?php echo csrf_field(); ?>

					<div class="d-flex justify-content-between flex-wrap w-100 mb-3">
						<div class="mb-2 mb-lg-0">
							<h2 class="h5 mb-2"><?php echo e(__('Create Page')); ?></h2>
						</div>
						<div class="d-flex flex-column flex-sm-row flex-wrap align-items-start">
							<div class="form-check form-switch mb-2 me-sm-3">
								<label class="form-check-label me-2" for="is_breadcrumb"><?php echo e(__('Page Breadcrumb')); ?></label>
								<input class="form-check-input" type="checkbox" value="1" name="is_breadcrumb"  id="is_breadcrumb">
							</div>
							<div class="form-check form-switch mb-2 ms-sm-3">
								<label class="form-check-label" for="flexSwitchCheckDefault"><?php echo e(__('Page Status')); ?></label>
								<input class="form-check-input" type="checkbox" value="1" name="is_active"  id="flexSwitchCheckDefault">
							</div>
						</div>
					</div>

					<div class="sortable-list drop-here" id="pageComponent">
						<span class="text-muted drop-text"><?php echo e(__('Drop Component Here')); ?></span>
					</div>
					<div class="row mt-2">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="page_title"><?php echo e(__('Page Title')); ?></label>
								<input class="form-control" name="page_title"  id="page_title" type="text" value="<?php echo e(old('page_title')); ?>" required>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="page_slug"><?php echo e(__('Page Slug')); ?></label>
								<input class="form-control page_slug" name="page_slug"  id="page_slug" type="text" value="<?php echo e(old('page_slug')); ?>" required>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="meta_title"><?php echo e(__('Meta Title')); ?></label>
								<input class="form-control" name="meta_title"  id="meta_title" type="text" value="<?php echo e(old('meta_title')); ?>">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="meta_keywords"><?php echo e(__('Meta Keywords')); ?></label>
								<input class="form-control tags-evs"  name="tags"  id="meta_keywords" value="<?php echo e(old('tags')); ?>" type="text" >

							</div>
						</div>
						<div class="col-md-12 mb-3">
							<div class="form-group">
								<label for="meta_description"><?php echo e(__('Meta Description')); ?></label>
								<input class="form-control" name="meta_description" value="<?php echo e(old('meta_description')); ?>"  id="page_description" type="text">
							</div>
						</div>
					</div>
					<div class="mt-3">
						<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><?php echo e(__('Create Page')); ?></button>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<?php echo $__env->make('backend.page.partial._page_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/page/create.blade.php ENDPATH**/ ?>