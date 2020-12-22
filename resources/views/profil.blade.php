@extends('layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profil</h1>
  </div>

  <div class="row mb-3">
    <div class="col-md-8">
      @include('components.alert')
      <form method="POST" action="{{ route('profil.update') }}">
        @csrf
        @method('patch')
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-light">
            <h6 class="m-0 font-weight-bold text-primary">Maklumat Peribadi</h6>
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-9">
                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">E-mel</label>
              <div class="col-sm-9">
                <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
                @error('email')
                <small class="text-danger" role="alert">
                  <strong>{{ $message }}</strong>
                </small>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Kata Laluan</label>
              <div class="col-sm-9">
                <input type="password" name="password" class="form-control" id="inputPassword3">
                <small>Kosongkan jika tidak menukar kata laluan</small>
              </div>
            </div>
          </div>
          <div class="card-footer alert-light">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--Row-->
</div>
@endsection
