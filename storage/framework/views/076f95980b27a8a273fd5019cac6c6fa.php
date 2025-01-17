<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
       <!--begin::Brand Link-->
       <a href="./index.html" class="brand-link">
          <!--begin::Brand Image-->
          <img
             src="<?php echo e(asset('admin/assets/img/AdminLTELogo.png')); ?>"
             alt="AdminLTE Logo"
             class="brand-image opacity-75 shadow"
             />
          <!--end::Brand Image-->
          <!--begin::Brand Text-->
          <span class="brand-text fw-light">Arvind Portfolio</span>
          <!--end::Brand Text-->
       </a>
       <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
       <nav class="mt-2">
          <!--begin::Sidebar Menu-->
          <ul
             class="nav sidebar-menu flex-column"
             data-lte-toggle="treeview"
             role="menu"
             data-accordion="false"
             >
             <li class="nav-item">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link <?php if(Request::segment(2) == 'dashboard'): ?> active <?php endif; ?>">
                   <i class="nav-icon bi bi-speedometer"></i>
                   <p>
                      Dashboard
                      
                   </p>
                </a>
                
             </li>
             <li class="nav-item">
                <a href="<?php echo e(route('admin.home')); ?>" class="nav-link <?php if(Request::segment(2) == 'home'): ?> active <?php endif; ?>">
                  <i class="nav-icon bi bi-house-fill"></i>
                   <p>
                      Home
                   </p>
                </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo e(route('admin.about')); ?>" class="nav-link <?php if(Request::segment(2) == 'about'): ?> active <?php endif; ?>">
                  <i class="nav-icon bi bi-person-fill"></i>
                  <p>
                     About
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo e(route('admin.portfolio')); ?>" class="nav-link <?php if(Request::segment(2) == 'portfolio'): ?> active <?php endif; ?>">
                  <i class="nav-icon bi bi-grid-fill"></i>
                  <p>
                     Portfolio
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo e(route('admin.skills')); ?>" class="nav-link <?php if(Request::segment(2) == 'skills'): ?> active <?php endif; ?>">
                  <i class="nav-icon bi bi-grid-fill"></i>
                  <p>
                     Skills
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo e(route('admin.contact')); ?>" class="nav-link <?php if(Request::segment(2) == 'contact'): ?> active <?php endif; ?>">
                  <i class="nav-icon bi bi-envelope-fill"></i>
                  <p>
                     Contact
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo e(route('admin.blog')); ?>" class="nav-link <?php if(Request::segment(2) == 'blog'): ?> active <?php endif; ?>">
                  <i class="nav-icon bi bi-pencil-square"></i>
                  <p>
                     Blog
                  </p>
               </a>
            </li>
          </ul>
          <!--end::Sidebar Menu-->
       </nav>
    </div>
    <!--end::Sidebar Wrapper-->
 </aside><?php /**PATH C:\xampp\htdocs\personal_portfolio\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>