


<?php $__env->startSection('title','Skills-page'); ?>

<?php $__env->startSection('content'); ?>

<section class="section skills" id="skills">
    <div class="container">

      <p class="section-subtitle">My Skills</p>

      <h2 class="h2 section-title">I Develop Skills Regularly</h2>

      <p class="section-text">
        Consistently enhancing my skills to deliver better performance and innovative solutions
            </p>

      <ul class="skills-list">

        <?php if($skills): ?>
        <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="skills-item">
          <div class="wrapper" style="width: 95%">
            <h3 class=" skills-title"><?php echo e($skill->skill_name); ?></h3>

            <data class="skills-data" value="<?php echo e($skill->proficiency); ?>"><?php echo e($skill->proficiency); ?>%</data>
          </div>

          <div class="skills-progress-box">
            <div class="skills-progress" style="width: <?php echo e($skill->proficiency); ?>%"></div>
          </div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <li class="skills-item">
          <div class="wrapper" style="width: 75%">
            <h3 class="skills-title">React</h3>

            <data class="skills-data" value="75">75%</data>
          </div>

          <div class="skills-progress-box">
            <div class="skills-progress" style="width: 75%"></div>
          </div>
        </li>

        <li class="skills-item">
          <div class="wrapper" style="width: 90%">
            <h3 class="skills-title">MongoDB</h3>

            <data class="skills-data" value="90">90%</data>
          </div>

          <div class="skills-progress-box">
            <div class="skills-progress" style="width: 90%"></div>
          </div>
        </li>

        <li class="skills-item">
          <div class="wrapper" style="width: 70%">
            <h3 class="skills-title">Python</h3>

            <data class="skills-data" value="70">70%</data>
          </div>

          <div class="skills-progress-box">
            <div class="skills-progress" style="width: 70%"></div>
          </div>
        </li>

        <li class="skills-item">
          <div class="wrapper" style="width: 80%">
            <h3 class="skills-title">PHP</h3>

            <data class="skills-data" value="80">80%</data>
          </div>

          <div class="skills-progress-box">
            <div class="skills-progress" style="width: 80%"></div>
          </div>
        </li>

        <li class="skills-item">
          <div class="wrapper" style="width: 75%">
            <h3 class="skills-title">JavaScript</h3>

            <data class="skills-data" value="75">75%</data>
          </div>

          <div class="skills-progress-box">
            <div class="skills-progress" style="width: 75%"></div>
          </div>
        </li>
        <?php endif; ?>

      </ul>

    </div>
  </section>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal_portfolio\resources\views/skills.blade.php ENDPATH**/ ?>