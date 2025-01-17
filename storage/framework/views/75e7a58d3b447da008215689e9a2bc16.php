

<?php $__env->startSection('title','Home-page'); ?>
<?php $__env->startSection('content'); ?>



<main>
    <article>

      <!-- 
        - #HERO
      -->

      <?php if($latestHome): ?>
      <section class="hero" id="home">
        <div class="container">

          <div class="hero-banner">

            <img src="<?php echo e(asset($latestHome->image)); ?>" width="800" height="864" loading="lazy" alt="Ethan's Photo"
              class="img-cover">

            <div class="elem elem-1">
              <p class="elem-title"><?php echo e($latestHome->experince); ?></p>

              <p class="elem-text">of Success</p>
            </div>

            <div class="elem elem-2">
              <p class="elem-title"><?php echo e($latestHome->count_projects); ?>+</p>

              <p class="elem-text">Projects Completed</p>
            </div>

            <div class="elem elem-3">
              <ion-icon name="trophy"></ion-icon>
            </div>

            

          </div>

          <div class="hero-content">

            <h2 class="hero-title">
              <span>Hello I'm</span>
              <strong><?php echo e($latestHome->name); ?></strong> <?php echo e($latestHome->role); ?>

            </h2>

            <p class="hero-text">
              <?php echo e($latestHome->description); ?>

            </p>

            <div class="btn-group">
              <a href="#contact" class="btn btn-primary blue">Get a Quote</a>

              <a href="#about" class="btn">About Me</a>
            </div>

          </div>

        </div>
      </section>
      <?php else: ?>
      <section class="hero" id="home">
        <div class="container">
          <div class="hero-banner">
            <img src="<?php echo e(asset('default-image.jpg')); ?>" width="800" height="864" loading="lazy" alt="Default Hero Image" class="img-cover">
            <div class="elem elem-1">
              <p class="elem-title">5+</p>
              <p class="elem-text">Years of Success</p>
            </div>
            <div class="elem elem-2">
              <p class="elem-title">10+</p>
              <p class="elem-text">Projects Completed</p>
            </div>
            <div class="elem elem-3">
              <ion-icon name="trophy"></ion-icon>
            </div>
          </div>
    
          <div class="hero-content">
            <h2 class="hero-title">
              <span>Hello I'm</span>
              <strong>John Doe</strong> Web Developer
            </h2>
    
            <p class="hero-text">
              Passionate about building user-centric websites and web applications.
            </p>
    
            <div class="btn-group">
              <a href="#contact" class="btn btn-primary blue">Get a Quote</a>
              <a href="#about" class="btn">About Me</a>
            </div>
          </div>
        </div>
      </section>
<?php endif; ?>    





      <!-- 
        - #ABOUT
      -->






      <!-- 
        - #PORTFOLIO
      -->

   





      <!-- 
        - #SKILLS
      -->






      <!-- 
        - #CONTACT
      -->

    





      <!-- 
        - #BLOG
      -->

    

    </article>
  </main>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal_portfolio\resources\views/index.blade.php ENDPATH**/ ?>