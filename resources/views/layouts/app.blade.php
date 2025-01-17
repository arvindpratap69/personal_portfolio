<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title','Arvind - Web Developer from Lucknow') </title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="{{ url('/favicon.svg') }}" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

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

    @include('layouts.sidebar')
    @yield('content')

     <!-- 
    - custom js link
  -->
  <script src="{{ asset('assets/js/script.js') }}"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
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

</body>

</html>