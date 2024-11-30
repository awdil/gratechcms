<div id="targetElement" class="sidebar-area sidebar__hide light-area">
    <div class="sidebar__overlay"></div>


    <a href="<?php echo e(route('home')); ?>" class="logo mb-40">
        <img src="<?php echo e(asset(setting('light_logo'))); ?>" alt="logo">
    </a>
    <?php $route = auth()->check() ? route('user.dashboard') : route('login'); ?>
    <a href="<?php echo e($route); ?>" class="btn-one pt-0 pb-0 rounded">
        <?php echo e(auth()->check() ? __('Dashboard') : __('Login')); ?> <i class="fa-regular fa-arrow-right-long"></i>
    </a>
    <div class="mobile-menu overflow-hidden"></div>

    <?php if(setting('language_visibility')): ?>
        <div class="light-area mt-20 pb-20">
            <select name="locale" class="light-area"
                    onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option class="light-area"
                            value="<?php echo e(route('locale-set', $language->code)); ?>" <?php if($language->code == app()->getLocale()): echo 'selected'; endif; ?>><?php echo e($language->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    <?php endif; ?>
    <ul class="info pt-40">
        <li class="py-2"><i class="fa-solid primary-color fa-phone-volume"></i> <a
                    href="tel:<?php echo e(trim(explode(',', $contactInfo->content->contact_number->value)[0])); ?>"><?php echo e(trim(explode(',', $contactInfo->content->contact_number->value)[0])); ?></a>
        </li>
        <li><i class="fa-solid primary-color fa-paper-plane"></i> <a
                    href="mailto:<?php echo e($contactInfo->content->support_mail->value); ?>"><?php echo e($contactInfo->content->support_mail->value); ?></a>
        </li>
    </ul>
    <div class="social-icon mt-20">
        <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($social->url); ?>" target="<?php echo e($social->target); ?>"><i class="<?php echo e($social->icon_class); ?>"></i></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
</div>
<?php /**PATH /Users/apple/Documents/gratechcms/resources/views/frontend/layouts/partials/_sidebar.blade.php ENDPATH**/ ?>