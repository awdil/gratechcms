<div class="modal fade" id="new-nav-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="h6 modal-title"><?php echo e(__('Navigation Create')); ?></h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12 col-xl-12">
						<form method="POST" action="<?php echo e(route('admin.navigation.site.store')); ?>" enctype="multipart/form-data">
							<?php echo csrf_field(); ?>

							<div class="row">
								<div class="col-md-12 mb-3">
									<div>
										<label for="first_name"><?php echo e(__('Navigation Name')); ?></label>
										<input class="form-control" name="navigation_name" id="first_name"  type="text" placeholder="Enter Navigation name" required>
									</div>
								</div>
							</div>

							<div class="row ">
								<div class="col-md-12 mb-3">
									<div>
										<label for="navigation-display"><?php echo e(__('Navigation Display')); ?></label>
										<select class="form-select" name="navigation_display" id="navigation-display" aria-label="Default select example">
											<?php $__currentLoopData = \App\Constants\Navigation::DISPLAY; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $display): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($display); ?>"><?php echo e(ucwords($display)); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
								</div>
								<div class="col-md-12 mb-3">
									<div>
										<label for="target-link"><?php echo e(__('Target Link')); ?></label>
										<select class="form-select" name="target_link" id="target-link" aria-label="Default select example">
											<?php $__currentLoopData = \App\Constants\Navigation::TARGET; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $target): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($target); ?>"><?php echo e($name); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12 mb-3">
									<div class="page-list">
										<label for="page-list"><?php echo e(__('Page Select')); ?></label>
										<select class="form-select" name="page_id" id="page-list" aria-label="Default select example">
											<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($page->id); ?>"><?php echo e($page->title); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
									<div class="custom-url-input" hidden>
										<label for="custom-url"><?php echo e(__('Custom Url')); ?></label>
										<input class="form-control" name="custom_url" id="custom-url"  type="text" placeholder="Enter Custom Url">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 mb-3 mt-2">
									<div>
										<div class="form-check form-switch">
											<label class="form-check-label" for="is-custom-url"><?php echo e(__('Custom Url')); ?></label>
											<input class="form-check-input is-custom-url" type="checkbox" value="active" name="is_custom_url"  id="is-custom-url">
										</div>
									</div>
								</div>
								<div class="col-md-6 mb-3 mt-2">
									<div>
										<div class="form-check form-switch">
											<label class="form-check-label" for="nav-status"><?php echo e(__('Navigation Status')); ?></label>
											<input class="form-check-input" type="checkbox" checked value="1" name="status"  id="nav-status">
										</div>
									</div>
								</div>

							</div>

							<div class="mt-3">
								<button class="btn btn-info mt-2" type="submit"> <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'check','height' => '20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'check','height' => '20']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?> <?php echo e(__('Save Now')); ?></button>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/navigation/partial/_new_nav_modal.blade.php ENDPATH**/ ?>