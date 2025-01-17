

<?php $__env->startSection('title','about-page'); ?>

<?php $__env->startSection('content'); ?>
<?php if($latestAbout): ?>
<section class="section about" id="about">
    <div class="container">

      <figure class="about-banner">

        
          <img class="admin_image" src="<?php echo e(asset($latestAbout->admin_image)); ?>"loading="lazy" alt="Arvind's Photo"
          class="img-cover">

        <img src="<?php echo e(asset('assets/images/absolute-image.jpg')); ?>" width="800" height="717" loading="lazy" alt="Arvind's Photo"
          class="abs-img">
          <img src="<?php echo e(asset($latestAbout->image)); ?>" width="800" height="717" loading="lazy" alt="Arvind's Photo"
          class="abs-img">

        <div class="abs-icon abs-icon-1">
          <ion-icon name="<?php echo e($latestAbout->icon_1); ?>"></ion-icon>
        </div>
        <div class="abs-icon abs-icon-2">
          <ion-icon name="<?php echo e($latestAbout->icon_2); ?>"></ion-icon>
        </div>

        <div class="abs-icon abs-icon-3">
          <ion-icon name="<?php echo e($latestAbout->icon_3); ?>"></ion-icon>
        </div>

      </figure>

      <div class="about-content">

        <p class="section-subtitle"><?php echo e($latestAbout->subtitle); ?></p>

        <h2 class="h2 section-title"><?php echo e($latestAbout->title); ?></h2>

        <p class="section-text">
          <?php echo e($latestAbout->short_description); ?>

        </p>

        <p class="section-text">
          <?php echo e($latestAbout->long_description); ?>

        </p>

        <a href="#portfolio" class="btn btn-primary blue">View Portfolio</a>

      </div>

    </div>
  </section>
  <?php else: ?>
  <section class="section about" id="about">
    <div class="container">
  
      <figure class="about-banner">
        <img class="admin_image" src="<?php echo e(asset('assets/images/default-admin.jpg')); ?>" loading="lazy" alt="Default Admin Image" class="img-cover">
        
        <img src="<?php echo e(asset('assets/images/absolute-image.jpg')); ?>" width="800" height="717" loading="lazy" alt="Default Absolute Image" class="abs-img">
  
        <div class="abs-icon abs-icon-1">
          <ion-icon name="star-outline"></ion-icon>
        </div>
        <div class="abs-icon abs-icon-2">
          <ion-icon name="code-outline"></ion-icon>
        </div>
        <div class="abs-icon abs-icon-3">
          <ion-icon name="rocket-outline"></ion-icon>
        </div>
      </figure>
  
      <div class="about-content">
        <p class="section-subtitle">Welcome to My Profile</p>
  
        <h2 class="h2 section-title">Creative Web Developer</h2>
  
        <p class="section-text">
          I am passionate about designing and building dynamic websites and applications with user-centric features.
        </p>
  
        <p class="section-text">
          Specialized in creating scalable solutions and implementing innovative ideas for clients worldwide.
        </p>
  
        <a href="#portfolio" class="btn btn-primary blue">View Portfolio</a>
      </div>
  
    </div>
  </section>
  
  <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal_portfolio\resources\views/about.blade.php ENDPATH**/ ?>