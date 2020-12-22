@extends('layouts.master')

@section('css')
<link href="{{ asset('theme') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengguna Sistem</h1>
  </div>

  <div class="row mb-3">
    <div class="col-md-12">
      @include('components.alert')
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-light">
          <h6 class="m-0 font-weight-bold text-primary">Senarai Pengguna</h6>
          <div class="float-right">
            <button type="button" class="btn btn-sm btn-success" title="Tambah Pengguna" data-toggle="modal" data-target="#addUser"><i class="fas fa-plus"></i> Tambah Pengguna</button>
            <!-- modal -->
            <form method="POST" action="{{ route('tetapan.pengguna.store') }}">
              @csrf
              <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Pengguna</h5>
                    </div>
                    <div class="modal-body">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">E-mel</label>
                        <div class="col-sm-9">
                          <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Kata Laluan</label>
                        <div class="col-sm-9">
                          <input type="password" name="password" class="form-control" id="inputPassword3" required>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                      <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Batal</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="usersList">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>E-mel</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-outline-primary" title="Edit Pengguna" data-toggle="modal" data-target="#updateUser-{{ $user->id }}"><i class="far fa-edit"></i> Edit</button>
                    <!-- modal -->
                    <form method="POST" action="{{ route('tetapan.pengguna.update', $user->id) }}" style="display: inline;">
                      @csrf
                      @method('patch')
                      <div class="modal fade" id="updateUser-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabelLogout">Edit Pengguna</h5>
                            </div>
                            <div class="modal-body">
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                  <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">E-mel</label>
                                <div class="col-sm-9">
                                  <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
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
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary btn-sm">Kemaskini</button>
                              <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Batal</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                    <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Pengguna" data-toggle="modal" data-target="#deleteUser-{{ $user->id }}"><i class="far fa-trash-alt"></i> Hapus</button>
                    <!-- modal -->
                    <form method="POST" action="{{ route('tetapan.pengguna.delete', $user->id) }}" style="display: inline;">
                      @csrf
                      @method('delete')
                      <div class="modal fade" id="deleteUser-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title font-weight-bold text-danger" id="exampleModalLabelLogout">Tunggu!</h5>
                            </div>
                            <div class="modal-body text-center">
                              <p><i class="fas fa-7x fa-exclamation-triangle text-danger"></i></p>
                              <p>Anda pasti untuk hapus rekod {{ $user->name }}?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                              <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Batal</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Row-->
</div>
@endsection

@section('script')
<script src="{{ asset('theme') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('theme') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function () {
  $('#usersList').DataTable(); // ID From dataTable
});
</script>
@endsection
