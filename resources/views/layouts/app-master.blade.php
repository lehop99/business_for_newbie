<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="LE QUANG HOP">
   
    <title>Business Manner for New employee</title>

    {{-- icon nhỏ ở trên tab trình duyệt --}}
    {{-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico"> --}}

    <!-- Bootstrap core CSS -->
    {{-- <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet"> --}}

    <!-- Custom styles for this template -->
    {{-- <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet"> --}}

    <!--=============== CSS ===============-->
    <link href="{!! url('assets/css/styles.css') !!}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="assets/css/styles.css"> --}}

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

   
  </head>
  
  <body>
    
    @include('layouts.partials.navbar')

    <main class="container">
        @yield('content')
    </main>

    {{-- <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script> --}}

    <link href="{!! url('assets/css/styles.css') !!}" rel="stylesheet">
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class='bx bx-up-arrow-alt scrollup__icon'></i>
    </a>

    <!--=============== MAIN JS ===============-->
    <link href="{!! url('assets/js/main.js') !!}">
    <script src="assets/js/main.js"></script>
      
  </body>
</html>