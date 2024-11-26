<div class="col-12 col-xl-12">
	<div class="card">
        <div class="nav-card-header bg-light">
            🔑 <?php echo e(__('Password Change')); ?>

        </div>
        <div class="card-body border-0 shadow mb-4">
            <form method="POST" action="<?php echo e(route('admin.profile.password-update')); ?>">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="first_name"><?php echo e(__('New Password')); ?></label>
                            <input class="form-control" name="new_password" type="password"
                                   placeholder="Enter New Password" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="last_name"><?php echo e(__('Confirm Password')); ?></label>
                            <input class="form-control" name="confirm_password" type="password"
                                   placeholder="Enter Confirm Password" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="last_name"><?php echo e(__('Old Password')); ?></label>
                        <input class="form-control" name="old_password" type="password" placeholder="Enter Old Password"
                               required>
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><?php echo e(__('Update Password')); ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/profile/partials/_change_password.blade.php ENDPATH**/ ?>