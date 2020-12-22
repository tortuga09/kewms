<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistem Pengurusan Kewangan Masjid/Surau">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <title>{{ config('app.name') }}</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('theme') }}/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

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

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  </style>
  <!-- Custom styles for this template -->
  <link href="{{ asset('theme') }}/css/cover.css" rel="stylesheet">
</head>
<body class="text-center bg-img">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">{{ config('app.name') }}</h3>
        <nav class="nav nav-masthead justify-content-center">
          @auth
          <a href="{{ url('/home') }}" class="nav-link">Home</a>
          @else
          <a href="{{ route('login') }}" class="nav-link">Login</a>

          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="nav-link">Register</a>
          @endif
          @endauth
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
      <h1 class="cover-heading">Sistem Pengurusan<br>Kewangan Masjid/Surau</h1>
      <p class="lead">Memudahkan dan melancarkan pengurusan kewangan masjid/surau.</p>
    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        @include('components.footer')
      </div>
    </footer>
  </div>
</body>
</html>
