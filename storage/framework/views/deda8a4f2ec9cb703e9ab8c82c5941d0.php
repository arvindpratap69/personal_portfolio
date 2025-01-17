<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $__env->yieldContent('title','Arvind - Web Developer from Lucknow'); ?> </title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="<?php echo e(url('/favicon.svg')); ?>" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Open+Sans:wght@400;500;700&family=Poppins:wght@400;600&display=swap"
    rel="stylesheet">
</head>

<body id="top">

    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>

     <!-- 
    - custom js link
  -->
  <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
  toastr.options = {
      "closeButton": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "timeOut": "5000"
  };
</script>
      <!--end::Script-->
      <script>
        <?php if(Session::has('success')): ?>
            toastr.success('<?php echo e(Session::get('success')); ?>');
        <?php endif; ?>
    
        <?php if(Session::has('error')): ?>
            toastr.error('<?php echo e(Session::get('error')); ?>');
        <?php endif; ?>
    
        <?php if(Session::has('info')): ?>
            toastr.info('<?php echo e(Session::get('info')); ?>');
        <?php endif; ?>
    
        <?php if(Session::has('warning')): ?>
            toastr.warning('<?php echo e(Session::get('warning')); ?>');
        <?php endif; ?>
    </script>

</body>

</html><?php /**PATH C:\xampp\htdocs\personal_portfolio\resources\views/layouts/app.blade.php ENDPATH**/ ?>