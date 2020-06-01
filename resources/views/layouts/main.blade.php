<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>{{$titulo}}</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset ('/dash/assets/img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset ('/dash/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset ('/dash/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset ('/dash/assets/css/argon.css?v=1.2.0') }}" type="text/css">

  <!--Mis estilos personalizados-->
  <link rel="stylesheet" href="{{ asset ('/dash/assets/css/mystyles.css')}}" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  @include('layouts/sidenav')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
  @include('layouts/header')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-secundary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-black d-inline-block mb-0">{{$section}}</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6 ml--4">
      @yield('section')
      <!-- Footer -->
      @include('layouts/footer')
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset ('/dash/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset ('/dash/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset ('/dash/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset ('/dash/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset ('/dash/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset ('/dash/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset ('/dash/assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset ('/dash/assets/js/argon.js?v=1.2.0')}}"></script>
  @yield('scripts')
</body>

</html>
