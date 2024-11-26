<?php use App\Constants\Status; ?>
<div class="col-12 col-xl-12">
	<div class="card">
        <div class="nav-card-header bg-light">
            🔒 <?php echo e(__('Two Factor Authentication (2FA)')); ?>

        </div>
        <div class="card-body border-0 shadow mb-4">
            <?php if(null !== $user->google2fa_secret): ?>
            <p><?php echo e(__('Two Factor Authentication (2FA) strengthens access security by requiring two methods to verify your identity. It protects against phishing, social engineering, and password brute force attacks.')); ?></p>

            <?php if($user->google2fa_enabled == Status::ACTIVE): ?>
            <p><?php echo e(__('Two Factor Authentication (2FA) is currently enabled.')); ?></p>
            <span class="text-muted pb-2"><?php echo e(__('Enter Your Login Password')); ?></span>
            <?php else: ?>
            <?php echo app('pragmarx.google2fa')->getQRCodeInline(config('app.name'), $user->email, $user->google2fa_secret); ?>

            <p><?php echo e(__('Scan the QR code with your Google Authenticator App')); ?></p>
            <span class="text-muted pb-2"><?php echo e(__('Enter the PIN from Google Authenticator App')); ?></span>
            <?php endif; ?>

            <form action="<?php echo e(route('admin.profile.2fa-auth')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <input type="password" name="one_time_password" class="form-control">
                </div>
                <div class="mt-4">
                    <?php if($user->google2fa_enabled == Status::ACTIVE): ?>
                    <button type="submit" class="btn btn-gray-800 animate-up-2" value="<?php echo e(Status::DISABLE); ?>"
                            name="status"><?php echo e(__('Disable 2FA')); ?></button>
                    <?php else: ?>
                    <button type="submit" class="btn btn-gray-800 animate-up-2" value="<?php echo e(Status::ENABLE); ?>"
                            name="status"><?php echo e(__('Enable 2FA')); ?></button>
                    <?php endif; ?>
                </div>
            </form>
            <?php else: ?>
            <div class="mt-3">
                <p class="text-muted"><?php echo e(__('Enable Two Factor Authentication to protect your account')); ?></p>
                <a href="<?php echo e(route('admin.profile.2fa-generate')); ?>"
                   class="btn btn-gray-800 animate-up-2"><?php echo e(__('Generate 2FA Secret')); ?></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/profile/partials/_two_fa.blade.php ENDPATH**/ ?>