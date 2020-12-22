<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistem Pengurusan Kewangan Masjid/Surau">
  <meta name="author" content="Sistem Pengurusan Kewangan Masjid/Surau">
  <link href="{{ asset('theme') }}/img/logo/logo.png" rel="icon">
  <title>{{ config('app.name') }}</title>
  <link href="{{ asset('theme') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('theme') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('theme') }}/css/ruang-admin.min.css" rel="stylesheet">

  <style media="screen">
  .bg-img {
    background-image: url("{{ asset('theme/img/bg.jpg') }}");
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
  }
  </style>

</head>

<body class="bg-gradient-login bg-img">
  <!-- Login Content -->
  @yield('content')
  <!-- Login Content -->
  <script src="{{ asset('theme') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('theme') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('theme') }}/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{ asset('theme') }}/js/ruang-admin.min.js"></script>
</body>

</html>
