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
                  <h1 class="h4 text-gray-900 mb-4">Set semula kata laluan</h1>
                </div>
                <form class="user" method="POST" action="{{ route('password.update') }}">
                  @csrf
                  <input type="hidden" name="token" value="{{ $token }}">
                  <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="Masukkan e-mel" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukkan kata laluan baharu">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Taip semula kata laluan">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Set Kata Laluan</button>
                  </div>
                </form>
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
