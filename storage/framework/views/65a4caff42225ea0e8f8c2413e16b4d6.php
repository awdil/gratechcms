<?php ($content = $data->content); ?>
<section class="about-area sub-bg pt-120">
	<div class="about__shape wow slideInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
		<img src="<?php echo e(asset($content->left_line->value)); ?>" alt="shape">
	</div>
	<div class="container">
		<div class="row g-4">
			<div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
				<div class="about__left-item">
					<div class="image big-image">
						<img src="<?php echo e(asset($content->big_image->value)); ?>" alt="image">
					</div>
					<div class="image sm-image">
						<div class="video__btn-wrp">
							<div class="video-btn video-pulse">
								<a class="video-popup" href="<?php echo e($content->video_popup_link->value); ?>"><i
										class="fa-solid fa-play"></i></a>
							</div>
						</div>
						<img src="<?php echo e(asset($content->image_2->value)); ?>" alt="image">
					</div>
					<div class="circle-shape">
						<img src="<?php echo e(asset($content->circle->value)); ?>" alt="shape">
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="section-header mb-40">
					<h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
						<img class="me-1" src="<?php echo e(asset($content->title_icon->value)); ?>" alt="icon">
						<?php echo e($content->sub_heading->value); ?>

					</h5>
					<h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"><?php echo e($content->heading->value); ?></h2>
					<p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms"><?php echo e($content->summary->value); ?></p>
				</div>
				<div class="row g-4 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
					<div class="col-md-6">
						<div class="about__right-item">
							<div class="icon">
								<img src="<?php echo e(asset($content->right_item_icon->value)); ?>" alt="icon">
							</div>
							<div class="content">
								<h4 class="mb-1"><?php echo e($content->right_item_title->value); ?></h4>
								<p><?php echo e($content->right_item_summary->value); ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about__right-item">
							<div class="icon">
								<img src="<?php echo e(asset($content->right_item_icon_2->value)); ?>" alt="icon">
							</div>
							<div class="content">
								<h4 class="mb-1"><?php echo e($content->right_item_title_2->value); ?></h4>
								<p><?php echo e($content->right_item_summary_2->value); ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="about__info mt-50 wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
					<a href="<?php echo e($content->button_link->value); ?>" class="btn-one"><?php echo e($content->button_title->value); ?> <i
							class="fa-regular fa-arrow-right-long"></i></a>
					<div class="d-flex gap-2 align-items-center">
						<img src="<?php echo e(asset($content->items_center_image->value)); ?>" alt="image">
						<div class="info">
							<h5><?php echo e($content->items_center_title->value); ?></h5>
							<span class="sm-font"><?php echo e($content->items_center_sub_title->value); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/page/component/_about_pro.blade.php ENDPATH**/ ?>