@extends('layouts.no-auth')

@section('content')
<div class="container-login">
  <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-12 col-md-9">
      <div class="card shadow-sm my-5">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-12">
              <div class="login-form">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Sila Log Masuk</h1>
                </div>
                <form class="user" method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan e-mel" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Kata laluan">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log Masuk</button>
                    <a href="/" class="btn btn-secondary btn-sm btn-block"><i class="fas fa-home"></i> Laman Utama</a>
                  </div>
                </form>
                <hr>
                <div class="text-center">
                  @if (Route::has('password.request'))
                  <a class="font-weight-bold small" href="{{ route('password.request') }}">Lupa kata laluan?</a>
                  @endif
                </div>
                <div class="text-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <p>
          @include('components.footer')
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
