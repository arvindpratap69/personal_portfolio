
<?php $__env->startSection('title','portfolio-page'); ?>

<?php $__env->startSection('content'); ?>


<section class="section portfolio" id="portfolio">
    <div class="container">

      <p class="section-subtitle">Portfolio</p>

      <h2 class="h2 section-title">My Amazing Works</h2>

      <p class="section-text">
        Dliquip ex ea commo do conse namber onequa ute irure dolor in reprehen derit in voluptate
      </p>

      <ul class="portfolio-list">
        <?php if($allPortfolio->isNotEmpty()): ?>
        <?php $__currentLoopData = $allPortfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showportfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
          <a href="<?php echo e($showportfolio->project_url); ?>" class="portfolio-card" style="background-image: url('<?php echo e(asset($showportfolio->image_path)); ?>')">
            <div class="card-content">

              <p class="card-subtitle"><?php echo e($showportfolio->subtitle); ?></p>

              <h3 class="h3 card-title"><?php echo e($showportfolio->title); ?></h3>

              <span class="btn-link">
                <span>View Project</span>

                <ion-icon name="arrow-forward"></ion-icon>
              </span>

            </div>
          </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <li>
          <a href="#" class="portfolio-card" style="background-image: url('<?php echo e(asset('assets/images/portfolio-2.jpg')); ?>')">
            <div class="card-content">

              <p class="card-subtitle">Vimeo</p>

              <h3 class="h3 card-title">Web Application for Desiverse</h3>

              <span class="btn-link">
                <span>View Project</span>

                <ion-icon name="arrow-forward"></ion-icon>
              </span>

            </div>
          </a>
        </li>
        <?php endif; ?>



      </ul>

    </div>
  </section>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal_portfolio\resources\views/portfolio.blade.php ENDPATH**/ ?>