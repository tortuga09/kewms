@extends('layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Organisasi</h1>
  </div>

  <div class="row mb-3">
    <div class="col-md-12">
      @include('components.alert')
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-light">
          <h6 class="m-0 font-weight-bold text-primary">Maklumat Organisasi</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Nama Singkatan</th>
                  <th>Nama Organisasi</th>
                  <th>Alamat</th>
                  <th>No. Telefon</th>
                  <th>E-mel</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ $organisasi->kod }}</td>
                  <td>{{ $organisasi->nama_organisasi }}</td>
                  <td>
                    {{ $organisasi->alamat1 }}<br>
                    {!! ($organisasi->alamat2) ? $organisasi->alamat2.'<br>' : '' !!}
                    {!! ($organisasi->alamat3) ? $organisasi->alamat3.'<br>' : '' !!}
                    {{ $organisasi->poskod }} {{ $organisasi->bandar }}<br>
                    {{ $organisasi->negeri }}
                  </td>
                  <td>{{ $organisasi->telefon }}</td>
                  <td>{{ $organisasi->email }}</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-outline-primary" title="Edit Maklumat" data-toggle="modal" data-target="#updateMaklumat-{{ $organisasi->id }}"><i class="far fa-edit"></i> Edit</button>
                    <!-- modal -->
                    <form method="POST" action="{{ route('tetapan.organisasi.update', $organisasi->id) }}" style="display: inline;">
                      @csrf
                      @method('patch')
                      <div class="modal fade" id="updateMaklumat-{{ $organisasi->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabelLogout">Edit Maklumat Organisasi</h5>
                            </div>
                            <div class="modal-body">
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Singkatan</label>
                                <div class="col-sm-2">
                                  <input type="text" name="kod" value="{{ $organisasi->kod }}" class="form-control" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                  <input type="text" name="nama_organisasi" value="{{ $organisasi->nama_organisasi }}" class="form-control" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat 1</label>
                                <div class="col-sm-9">
                                  <input type="text" name="alamat1" value="{{ $organisasi->alamat1 }}" class="form-control" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat 2</label>
                                <div class="col-sm-9">
                                  <input type="text" name="alamat2" value="{{ $organisasi->alamat2 }}" class="form-control" >
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat 3</label>
                                <div class="col-sm-9">
                                  <input type="text" name="alamat3" value="{{ $organisasi->alamat3 }}" class="form-control">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Poskod</label>
                                <div class="col-sm-2">
                                  <input type="text" name="poskod" value="{{ $organisasi->poskod }}" class="form-control" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Bandar</label>
                                <div class="col-sm-9">
                                  <input type="text" name="bandar" value="{{ $organisasi->bandar }}" class="form-control" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Negeri</label>
                                <div class="col-sm-9">
                                  <input type="text" name="negeri" value="{{ $organisasi->negeri }}" class="form-control" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">No. Telefon</label>
                                <div class="col-sm-9">
                                  <input type="text" name="telefon" value="{{ $organisasi->telefon }}" class="form-control" >
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">E-mel</label>
                                <div class="col-sm-9">
                                  <input type="email" name="email" value="{{ $organisasi->email }}" class="form-control">
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
                  </td>
                </tr>
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
