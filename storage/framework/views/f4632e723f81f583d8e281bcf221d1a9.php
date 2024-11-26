
<?php $__env->startSection('title'); ?>
	<?php echo e(__('Blog Create')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	
	<div class="py-4">
		<div class="d-flex justify-content-between w-100 flex-wrap">
			<div class="mb-3 mb-lg-0">
				<h1 class="h4"><?php echo e(__('Blog Create')); ?></h1>
			</div>
			<div class="btn-toolbar  mb-md-0 mb-2 ">
				<a href="<?php echo e(route('admin.blog.site.index')); ?>" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
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
				
				<form method="POST" action="<?php echo e(route('admin.blog.site.store')); ?>" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					
					<div class="row mt-2">
						
						<div class="col-md-12 mb-3">
							<div class="form-group">
								<label for="title"><?php echo e(__('Cover Image')); ?></label>
								<?php if (isset($component)) { $__componentOriginal9f066b104e9feebb8635e3779fc3f022 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f066b104e9feebb8635e3779fc3f022 = $attributes; } ?>
<?php $component = App\View\Components\ImgUp::resolve(['name' => 'cover'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
						
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="title"><?php echo e(__('Title')); ?></label>
								<input class="form-control" name="title" id="title" type="text" value="<?php echo e(old('title')); ?>" required>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="category"><?php echo e(__('Category')); ?></label>
								<select class="form-select" name="category_id" aria-label="Default">
									<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($category->id); ?>"><?php echo e(Str::upper($category->filter_name)); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="slug"><?php echo e(__('Slug')); ?></label>
								<input class="form-control slug" name="slug" id="slug" type="text" value="<?php echo e(old('slug')); ?>">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="tag"><?php echo e(__('Tag')); ?></label>
								<input class="form-control tags-evs" name="tag" id="tag" value="<?php echo e(old('tags')); ?>" type="text">
							</div>
						</div>
						<div class="col-md-12 mb-3">
							<div class="form-group">
								<label for="summary"><?php echo e(__('Summary')); ?></label>
								<textarea class="form-control" name="summary" id="summary" type="text"><?php echo e(old('summary')); ?></textarea>
							</div>
						</div>
						<div class="col-md-12 mb-3">
							<div class="form-group">
								<label for="content"><?php echo e(__('Content')); ?></label>
								<textarea class="form-control summernote" name="content" id="content" type="text"><?php echo e(old('content')); ?></textarea>
							</div>
						</div>
						<div class="col-md-6 mb-3 mt-2">
							<div class="form-check form-switch">
								<label class="form-check-label" for="blog-status"><?php echo e(__('Blog Status')); ?></label>
								<input class="form-check-input" type="checkbox" value="1" name="is_active" id="blog-status">
							</div>
						</div>
					</div>
					<div class="mt-3">
						<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><?php echo e(__('Create Blog')); ?></button>
					</div>
				</form>


			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script>
        $(document).ready(function () {
            'use strict';
            $('#title').on('input', function () {
                let title = $(this).val();
                let slug = generateSlug(title);
                $('.slug').val(slug);
            });
        });
	
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/blog/create.blade.php ENDPATH**/ ?>