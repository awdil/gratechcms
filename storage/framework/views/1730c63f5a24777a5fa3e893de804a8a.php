
<?php echo $__env->make('frontend.layouts.partials._cursor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php if(setting('header_top_bar')): ?>
	<?php echo $__env->make('frontend.layouts.partials._top_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>


<header class="header-area">
	<div class="container header__container">
		<div class="header__main">
			<a href="<?php echo e(route('home')); ?>" class="logo">
				<img src="<?php echo e(asset(setting('light_logo'))); ?>" alt="logo">
			</a>
			<div class="main-menu">
				<nav>
					<ul>
						<?php $__currentLoopData = $navigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navigation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><a href="<?php echo e($navigation->slug == '/' ? route('home') : $navigation->slug); ?>" target="<?php echo e($navigation->target); ?>"><?php echo e(_tr($navigation->name)); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</ul>
				</nav>
			</div>
			<?php if(auth()->check()): ?>
				<a href="<?php echo e(route('user.dashboard')); ?>" class="btn-one"><?php echo e(__('Dashboard')); ?> <i
							class="fa-regular fa-arrow-right-long"></i></a>
			<?php else: ?>
				<a href="<?php echo e(route('login')); ?>" class="btn-one"><?php echo e(__('Login')); ?> <i
							class="fa-regular fa-arrow-right-long"></i></a>
			<?php endif; ?>

			<?php if(setting('language_visibility')): ?>
				<div class="about-three__left-item d-flex flex-wrap gap-2 align-items-center light-area d-none d-lg-block">
					<select name="locale" class="light-area "  onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
						<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option  class="light-area" value="<?php echo e(route('locale-set', $language->code)); ?>" <?php if($language->code == app()->getLocale()): echo 'selected'; endif; ?>><?php echo e($language->name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
			<?php endif; ?>
			<div class="bars d-block d-lg-none">
				<i id="openButton" class="fa-solid fa-bars"></i>
			</div>
		</div>
	</div>
</header>

<?php /**PATH /Users/apple/Documents/gratechcms/resources/views/frontend/layouts/partials/_header_style_2.blade.php ENDPATH**/ ?>