<div class="modal fade" id="new-category-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="h6 modal-title"><?php echo e(__('Category Create')); ?></h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12 col-xl-12">
						<form method="POST" action="<?php echo e(route('admin.blog.category.store')); ?>">
							<?php echo csrf_field(); ?>
							
							<div class="row">
								<div class="col-md-12 mb-3">
									<div>
										<label for="category_name"><?php echo e(__('Category Name')); ?></label>
										<input class="form-control" name="category_name" id="category_name"  type="text" placeholder="Enter Category name" required>
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
								<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><?php echo e(__('Create Now')); ?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		
		</div>
	</div>
</div>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/blog/partial/_new_category_modal.blade.php ENDPATH**/ ?>