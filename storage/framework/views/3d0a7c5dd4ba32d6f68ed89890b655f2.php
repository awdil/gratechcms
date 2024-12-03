<div class="modal fade" id="edit-lang-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="h6 modal-title"><?php echo e(__('Update Language')); ?></h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12 col-xl-12">
						<form method="POST" action="" id="edit-lang-form">
							<?php echo method_field('PUT'); ?>
							<?php echo csrf_field(); ?>
							
							<div id="edit-lang-append">
							
							</div>
							
							<div class="mt-3">
								<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><?php echo e(__('Save Now')); ?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		
		</div>
	</div>
</div>
<?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/languages/partial/_edit_lang_modal.blade.php ENDPATH**/ ?>