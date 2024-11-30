<?php use App\Constants\Component; ?>

<?php $__env->startSection('title', __(title_case($data['section']).' Manage')); ?>
<?php $__env->startSection('content'); ?>
	<div class="py-4">
		<div class="d-flex justify-content-between w-100 flex-wrap">
			<div class="mb-3 mb-lg-0">
				<h1 class="h4"><?php echo e(__(ucwords(str_replace('_',' ',$data['section'])).' '.'Manage')); ?></h1>
			</div>
			<div class="btn-toolbar  mb-md-0 mb-2 ">
					<?php if(request()->get('page') === null): ?>
						<a href="<?php echo e(route('admin.page.component.index',['component_display' => $currentDisplay, 'component_category' => $currentCategory])); ?>"
						   class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
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
					<?php elseif(request()->get('page') !== null && request()->get('page')): ?>
						<a href="<?php echo e(route('admin.page.site.edit', request()->get('page'))); ?>"
						   class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
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
					<?php endif; ?>

			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-xl-12">
			<div class="card card-body border-0 shadow mb-4">
				
				<nav>
					<div class="nav nav-tabs mb-4" id="nav-tab" role="tablist">
						<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<a class="nav-item nav-link <?php if($code == config('app.static_default_language')): ?> active <?php endif; ?>" id="nav-home-tab" data-bs-toggle="tab" href="#nav-<?php echo e($code); ?>" role="tab"
							   aria-controls="nav-home" aria-selected="true"><?php echo e($name); ?></a>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">

						<?php $__empty_1 = true; $__currentLoopData = $data['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langCode => $pageContent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

						<div class="tab-pane fade  <?php if($langCode == config('app.static_default_language')): ?> show active <?php endif; ?>" id="nav-<?php echo e($langCode); ?>" role="tabpanel" aria-labelledby="nav-home-tab">
							<?php if(!empty($pageContent)): ?>
								<form method="POST" action="<?php echo e(route('admin.page.component.update', $data['id'])); ?>" enctype="multipart/form-data">
									<?php echo method_field('PUT'); ?>
									<?php echo csrf_field(); ?>
									<input type="hidden" name="lang" value="<?php echo e($langCode); ?>">
									<?php if($langCode == config('app.static_default_language')): ?>
										<div class="row">
											<div class="col-md-6 mb-3">
												<div>
													<label for="preview"><?php echo e(__('Preview')); ?></label>
													<?php if (isset($component)) { $__componentOriginal9f066b104e9feebb8635e3779fc3f022 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f066b104e9feebb8635e3779fc3f022 = $attributes; } ?>
<?php $component = App\View\Components\ImgUp::resolve(['name' => 'preview','old' => $data['preview']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
													<input class="form-control" name="name" value="<?php echo e($data['name']); ?>" id="name" type="text" placeholder="Enter your first name" required>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if($data['type'] == Component::STATIC): ?>
										<div class="row">
											<?php $__currentLoopData = $pageContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php echo $__env->make('backend.page.component.partial._input', ['value' => $value], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</div>
									<?php else: ?>
										<?php if($langCode == config('app.static_default_language')): ?>
											<div class="row">
												<div class="col-md-6 mb-3">
													<div>
														<label for="icon"><?php echo e(__('Component Icon')); ?></label>
														<?php if (isset($component)) { $__componentOriginal9f066b104e9feebb8635e3779fc3f022 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f066b104e9feebb8635e3779fc3f022 = $attributes; } ?>
<?php $component = App\View\Components\ImgUp::resolve(['name' => 'icon','old' => $data['icon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
										<?php endif; ?>
										<div class="row">
											<div class="col-md-12 mb-3">
												<div>
													<label for="content"><?php echo e(__('Component Content')); ?></label>
													<textarea class="form-control summernote" name="content" id="content" rows="3"><?php echo $pageContent; ?></textarea>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if($langCode == config('app.static_default_language')): ?>
										<div class="row">
											<div class="col-md-6 mb-3 mt-2">
												<div>
													<div class="form-check form-switch">
														<label class="form-check-label" for="status"><?php echo e(__('Component Status')); ?></label>
														<i data-bs-toggle="tooltip"
														   data-bs-placement="top"
														   title="<?php echo e(__('When status is active, component will be visible in Page Manager')); ?>"
														   class="mx-1 fa-solid fa-circle-info">
														</i>
														<input class="form-check-input" type="checkbox" value="1" <?php if($data['status']): echo 'checked'; endif; ?>  name="status" id="status">
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<div class="mt-3">
										<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><?php echo e(__( 'Update Component')); ?></button>
										<?php if($data['content_id'] != null): ?>
											<a class="btn btn-gray-800 mt-2 animate-up-2"
											   href="<?php echo e(route('admin.page.component.edit', $data['content_id'])); ?>"><?php echo e(title_case($data['section']) .' '.__('Item Manage')); ?> </a>
										<?php endif; ?>
									</div>
								</form>
							<?php else: ?>
								<p class="text-muted text-center"><?php echo e(__('No Translate content is available')); ?></p>
							<?php endif; ?>
						</div>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
							<p>No users</p>
						<?php endif; ?>
				</div>
				
			</div>
		</div>
	</div>

	<?php if(null !== $data['content_fields']): ?>

		
		<?php echo $__env->make('backend.page.component.item.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		
		<?php echo $__env->make('backend.page.component.partial._new_modal', ['fields' => $data['content_fields'],'componentId' => $data['id']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		
		<?php echo $__env->make('backend.page.component.partial._edit_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script>
        $(document).ready(function () {
            'use strict';

            $('.edit-modal-show').on('click', function (event) {
                let id = $(this).data('id');
				
                $.ajax({
                    url: "<?php echo e(route('admin.page.component-item.edit',['component_item' => ':id'])); ?>".replace(':id', id),
                    type: "GET",
                    data: {id: id},
                    success: function (data) {
                        // $('#edit-item-form').attr('action', updateUrl);
                        $('#edit-data').html(data);
                        handleImagePreview()
                    }
                });
                $('#item-edit').modal('show')
            })


            // delete item
            $('.delete').on('click', function (event) {
                let id = $(this).data('id');
                let url = '<?php echo e(route("admin.page.component-item.destroy", ["component_item" => ":id"])); ?>'.replace(':id', id)
                deleteItem(url)
            })

        });
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/page/component/edit.blade.php ENDPATH**/ ?>