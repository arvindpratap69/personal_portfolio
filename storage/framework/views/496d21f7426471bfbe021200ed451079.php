

<?php $__env->startSection('title','contact-page'); ?>

<?php $__env->startSection('content'); ?>

<section class="section contact" id="contact">
    <div class="container">

      <div class="contact-card">

        <p class="card-subtitle">Don't be shy</p>

        <h2 class="h2 section-title">Drop Me a Line</h2>

        <div class="wrapper">

          <form action="<?php echo e(route('contact.store')); ?>" method="post" class="contact-form">
            <?php echo csrf_field(); ?>

            <input type="text" name="name" placeholder="Name"  class="contact-input <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="invalid-feedback"><?php echo e($message); ?></p>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <input type="email" name="email" placeholder="Email"  class="contact-input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="invalid-feedback"><?php echo e($message); ?></p>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <textarea name="message" placeholder="Message"  class="contact-input <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></textarea>
            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="invalid-feedback"><?php echo e($message); ?></p>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <button type="submit" class="btn-submit">Submit Message</button>

          </form>

          <ul class="contact-list">

            <li class="contact-item">

              <div class="contact-icon">
                <ion-icon name="location"></ion-icon>
              </div>

              <div>
                <h3 class="contact-item-title">Address</h3>

                <address class="contact-item-link">
                 570, Awas Vikas Colony , Fatehpur(UP)
                </address>
              </div>

            </li>

            <li class="contact-item">

              <div class="contact-icon">
                <ion-icon name="mail"></ion-icon>
              </div>

              <div>
                <h3 class="contact-item-title">Email</h3>

                <a href="mailto:hello@ethan.com" class="contact-item-link">arvindthakur6902@gmail.com</a>
              </div>

            </li>

            <li class="contact-item">

              <div class="contact-icon">
                <ion-icon name="call"></ion-icon>
              </div>

              <div>
                <h3 class="contact-item-title">Phone</h3>

                <a href="tel:+1234567890" class="contact-item-link">+91 7275058538</a>
              </div>

            </li>

          </ul>

        </div>

      </div>

    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personal_portfolio\resources\views/contact.blade.php ENDPATH**/ ?>