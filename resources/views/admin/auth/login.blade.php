<!doctype html>
<html lang="en">
   <!--begin::Head-->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>AdminLTE 4 | Login Page</title>
      <!--begin::Primary Meta Tags-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="title" content="AdminLTE 4 | Login Page" />
      <meta name="author" content="ColorlibHQ" />
      <meta
         name="description"
         content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
         />
      <meta
         name="keywords"
         content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
         />
      <!--end::Primary Meta Tags-->
      <!--begin::Fonts-->
      <link
         rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
         integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
         crossorigin="anonymous"
         />
      <!--end::Fonts-->
      <!--begin::Third Party Plugin(OverlayScrollbars)-->
      <link
         rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
         integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
         crossorigin="anonymous"
         />
      <!--end::Third Party Plugin(OverlayScrollbars)-->
      <!--begin::Third Party Plugin(Bootstrap Icons)-->
      <link
         rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
         integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
         crossorigin="anonymous"
         />
        

      <!--end::Third Party Plugin(Bootstrap Icons)-->
      <!--begin::Required Plugin(AdminLTE)-->
      <link rel="stylesheet" href="{{ asset('admin/css/adminlte.css') }}" />
      <!--end::Required Plugin(AdminLTE)-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <style>
         #toast-container > div {
           background-color: #333 !important; /* Dark background for better readability */
           color: #fff !important; /* White text for contrast */
         }
       
         #toast-container > div.toast-success {
           background-color: #28a745 !important; /* Green for success */
         }
       
         #toast-container > div.toast-error {
           background-color: #dc3545 !important; /* Red for error */
         }
       
         #toast-container > div.toast-info {
           background-color: #17a2b8 !important; /* Blue for info */
         }
       
         #toast-container > div.toast-warning {
           background-color: #ffc107 !important; /* Yellow for warning */
         }
       </style>
       
   </head>
   <!--end::Head-->
   <!--begin::Body-->
   <body class="login-page bg-body-secondary">
      <div class="login-box">
         <div class="login-logo">
            <a href=""><b>D</b>Pannel</a>
         </div>
         <!-- /.login-logo -->
         <div class="card">
            <div class="card-body login-card-body">
               <p class="login-box-msg">Sign in to start your session</p>
               <form action="{{ route('login') }}" method="post">
                  @csrf
                  <div class="input-group mb-3">
                     <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email" />
                     {{-- <span style="color: red;">{{ $errors->first('email') }}</span> --}}
                     <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                     {{-- <span style="color: red;">{{ $errors->first('password') }}</span> --}}
                     <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                  </div>
                  <!--begin::Row-->
                  <div class="row">
                     <div class="col-8">
                        <p class="mb-1"><a href="{{ route('admin.forgot-password') }}">I forgot my password</a></p>
                     </div>
                     <!-- /.col -->
                     <div class="col-4">
                        <div class="d-grid gap-2">
                           <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                     </div>
                     <!-- /.col -->
                  </div>
                  <!--end::Row-->
               </form>
               <!-- /.social-auth-links -->

            </div>
            <!-- /.login-card-body -->
         </div>
      </div>
      <!-- /.login-box -->
      <!--begin::Third Party Plugin(OverlayScrollbars)-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


      <script
         src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
         integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
         crossorigin="anonymous"
         ></script>
      <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
      <script
         src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
         integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
         crossorigin="anonymous"
         ></script>
      <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
      <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
         integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
         crossorigin="anonymous"
         ></script>
      <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
      <script src="{{ asset('admin/js/adminlte.js') }}"></script>
      <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
      <script>
         const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
         const Default = {
           scrollbarTheme: 'os-theme-light',
           scrollbarAutoHide: 'leave',
           scrollbarClickScroll: true,
         };
         document.addEventListener('DOMContentLoaded', function () {
           const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
           if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
             OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
               scrollbars: {
                 theme: Default.scrollbarTheme,
                 autoHide: Default.scrollbarAutoHide,
                 clickScroll: Default.scrollbarClickScroll,
               },
             });
           }
         });
      </script>
      <script>
       toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
      </script>
            <!--end::Script-->
            <script>
              @if(Session::has('success'))
                  toastr.success('{{ Session::get('success') }}');
              @endif
          
              @if(Session::has('error'))
                  toastr.error('{{ Session::get('error') }}');
              @endif
          
              @if(Session::has('info'))
                  toastr.info('{{ Session::get('info') }}');
              @endif
          
              @if(Session::has('warning'))
                  toastr.warning('{{ Session::get('warning') }}');
              @endif
          </script>
      <!--end::OverlayScrollbars Configure-->
      <!--end::Script-->
   </body>
   <!--end::Body-->
</html>