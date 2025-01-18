 <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#">
        <h1 class="logo">Arvind Portfolio</h1>
      </a>

      <button class="nav-toggle-btn" aria-label="Toggle Menu" data-nav-toggle-btn>
        <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" class="close-icon"></ion-icon>
      </button>

      <nav class="navbar container">
        <ul class="navbar-list">

          <li <?php if(Request::segment(1) == ''): ?> active <?php endif; ?>>
            <a href="<?php echo e(route('home')); ?>" class="navbar-link " data-nav-link>Home</a>
          </li>

          <li>
            <a href="<?php echo e(route('about')); ?>" class="navbar-link" data-nav-link>About</a>
          </li>

          <li>
            <a href="<?php echo e(route('portfolio')); ?>" class="navbar-link" data-nav-link>Portfolio</a>
          </li>

          <li>
            <a href="<?php echo e(route('skills')); ?>" class="navbar-link" data-nav-link>Skills</a>
          </li>

          <li>
            <a href="<?php echo e(route('contact')); ?>" class="navbar-link" data-nav-link>Contact</a>
          </li>

          

          <li>
            <a href="<?php echo e(route('download.cv')); ?>" class="btn btn-primary">Download CV</a>
          </li>

        </ul>
      </nav>

    </div>
  </header><?php /**PATH C:\xampp\htdocs\personal_portfolio\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>