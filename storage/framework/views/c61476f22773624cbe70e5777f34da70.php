<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(setting('site_title')); ?></title>
	<link rel="shortcut icon" href="<?php echo e(asset(setting('site_favicon'))); ?>" type="image/x-icon"/>
	<link type="text/css" href="<?php echo e(asset('backend/css/app.css')); ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo e(asset('general/css/all.min.css')); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo e(asset('backend/css/summernote-lite.min.css')); ?>" >
	<link rel="stylesheet" href="<?php echo e(asset('backend/css/tagify.css')); ?>"  type="text/css" />
	<link rel="stylesheet" href="<?php echo e(asset('general/css/simple-notify.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('general/css/sweetalert2.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('general/css/daterangepicker.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('backend/css/custom.css')); ?>" />
	<?php echo $__env->yieldPushContent('style'); ?>
	<?php echo $__env->yieldContent('style'); ?>
</head>
<?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/layouts/partials/_head.blade.php ENDPATH**/ ?>