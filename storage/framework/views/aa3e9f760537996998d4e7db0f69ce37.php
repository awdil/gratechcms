<head>
	<meta charset="<?php echo e(setting('meta_charset')); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<meta name="title" content="<?php echo e(setting('meta_title')); ?>">
	<meta name="description" content="<?php echo e(setting('meta_description')); ?>">
	<meta name="keywords" content="<?php echo e(setting('meta_keywords')); ?>" />
	<meta property="og:image" content="<?php echo e(asset(setting('meta_image'))); ?>" />

	<title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(setting('site_title')); ?></title>
	<link rel="shortcut icon" href="<?php echo e(asset(setting('site_favicon'))); ?>" type="image/x-icon"/>
	<link rel="stylesheet" href="<?php echo e(asset('general/css/bootstrap.min.css')); ?>">

	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/meanmenu.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/all.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/swiper-bundle.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/magnific-popup.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/animate.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/nice-select.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('general/css/simple-notify.min.css?v2.01')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css?v2.01')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/custom.css?v2.01')); ?>">

	<?php if(setting('site_preloader') !== 'none'): ?>
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/preloader.css?v2.01')); ?>">
	<?php endif; ?>

	
	<?php ($css = \App\Models\SiteCustom::value('css')); ?>
	<?php if($css->is_active): ?>
		<style>
			<?php echo e($css->value); ?>

		</style>
	<?php endif; ?>


	
	<?php echo $__env->make('frontend.layouts.partials._site_color', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	

	<?php echo $__env->yieldContent('style'); ?>
	<?php echo $__env->yieldPushContent('style'); ?>
</head>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/layouts/partials/_head.blade.php ENDPATH**/ ?>