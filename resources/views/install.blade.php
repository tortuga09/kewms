@extends('layouts.no-auth')

@section('content')
<div class="container-login">
  <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-12 col-md-9">
      <div class="card shadow-sm my-5">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-12">
              <form class="" action="{{ route('install-store') }}" method="post">
                @csrf
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Tetapan Kali Pertama</h1>
                  </div>
                  <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-light font-weight-bold">
                      Maklumat Pentadbir
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">E-mel</label>
                        <input type="email" class="form-control" name="email" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password">
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-light font-weight-bold">
                      Maklumat Organisasi
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kod Singkatan</label>
                            <input type="text" class="form-control" name="kod" maxlength="5" required>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Organisasi</label>
                            <input type="text" class="form-control" name="nama_organisasi" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat 1</label>
                        <input type="text" class="form-control" name="alamat1" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat 2</label>
                        <input type="text" class="form-control" name="alamat2">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat 3</label>
                        <input type="text" class="form-control" name="alamat3">
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Poskod</label>
                            <input type="text" class="form-control" name="poskod" maxlength="5" required>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Bandar</label>
                            <input type="text" class="form-control" name="bandar" required>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Negeri</label>
                            <input type="text" class="form-control" name="negeri" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1">No. Telefon</label>
                            <input type="text" class="form-control" name="telefon">
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="form-group">
                            <label for="exampleInputEmail1">E-mel</label>
                            <input type="email" class="form-control" name="email_org">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                  </div>
                </div>
              </form>
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
