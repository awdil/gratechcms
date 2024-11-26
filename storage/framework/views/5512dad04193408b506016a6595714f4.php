<?php $__env->startSection('title',__('Register')); ?>
<?php $__env->startSection('user-auth-content'); ?>
    <div class="card card-md">
        <div class="card-body">
            <h2 class="mt-4 text-center">💪 <?php echo e(__('Create New Account')); ?></h2>
            <h4 class="mb-4 text-muted text-center"><?php echo e(__('Sign up to continue with')); ?> <?php echo e(setting('site_title')); ?></h4>
            <?php if($errors->any()): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <strong><?php echo e($error); ?></strong>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('register')); ?>" method="post" autocomplete="off" novalidate>
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-sm-4 col-md-6">
                        <div class="mb-3">
                            <label class="form-label"><?php echo e(__('First Name')); ?></label>
                            <input type="text" name="first_name" class="form-control" placeholder="<?php echo e(__('Ex: John')); ?>"
                                   autocomplete="off" required>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-6">
                        <div class="mb-3">
                            <label class="form-label"><?php echo e(__('Last Name')); ?></label>
                            <input type="text" name="last_name" class="form-control" placeholder="<?php echo e(__('Ex: Doe')); ?>" autocomplete="off" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label"><?php echo e(__('Email address')); ?></label>
                    <input type="email" name="email" class="form-control" placeholder="<?php echo e(__('your@email.com')); ?>" autocomplete="off" required>
                </div>

               <div class="row">
                   <div class="col-sm-4 col-md-6 mb-3">
                       <label class="form-label"><?php echo e(__('New Password')); ?></label>
                       <input type="password" name="password" class="form-control" placeholder="New password" autocomplete="off" required>
                   </div>
                   <div class="col-sm-4 col-md-6 mb-3">
                       <label class="form-label"><?php echo e(__('Password')); ?></label>
                       <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" autocomplete="off" required>
                   </div>
               </div>

                <div class="mb-3">
                    <label class="form-check">
                        <input type="checkbox" name="terms" class="form-check-input">
                        <span class="form-check-label"><?php echo e(__('Agree the')); ?> <a href="./terms-condition" tabindex="-1"><?php echo e(__('Terms and Conditions')); ?></a>.</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100"><?php echo e(__('Sign in')); ?></button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center text-secondary mt-3">
        <?php echo e(__("Already have account")); ?>? <a href="<?php echo e(route('login')); ?>" tabindex="-1"><?php echo e(__('Sign In')); ?></a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.user.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/auth/register.blade.php ENDPATH**/ ?>