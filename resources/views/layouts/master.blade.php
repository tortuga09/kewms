<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Sistem Pengurusan Kewangan Masjid/Surau">
  <meta name="author" content="Sistem Pengurusan Kewangan Masjid/Surau">
  <link href="{{ asset('theme') }}/img/logo/logo.png" rel="icon">
  <title>{{ config('app.name') }}</title>
  <link href="{{ asset('theme') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('theme') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('theme') }}/css/ruang-admin.min.css" rel="stylesheet">
  <!-- Bootstrap DatePicker -->
  <link href="{{ asset('theme') }}/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" >
  @yield('css')
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('components.sidemenu')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('components.topmenu')
        <!-- Topbar -->

        <!-- Container Fluid-->
        @yield('content')
        <!---Container Fluid-->

        <!-- Modal Logout -->
        @include('components.logout')
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            @include('components.footer')
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('theme') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('theme') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('theme') }}/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{ asset('theme') }}/js/ruang-admin.min.js"></script>
  <!-- Bootstrap Datepicker -->
  <script src="{{ asset('theme') }}/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="{{ asset('theme') }}/vendor/chart.js/Chart.min.js"></script>
  <script src="{{ asset('theme') }}/js/demo/chart-area-demo.js"></script>
  @yield('script')
</body>

</html>
