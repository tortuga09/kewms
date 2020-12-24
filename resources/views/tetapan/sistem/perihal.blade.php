@extends('layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Perihal Kewangan</h1>
  </div>

  <div class="row">
    <div class="col-md-12">
      @include('components.alert')
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-light">
          <h6 class="m-0 font-weight-bold text-primary">Perihal Kewangan (Terimaan)</h6>
          <div class="float-right">
            <button type="button" class="btn btn-sm btn-success" title="Tambah Perihal (Terimaan)" data-toggle="modal" data-target="#addTerima"><i class="fas fa-plus"></i> Tambah</button>
            <!-- modal -->
            <form method="POST" action="{{ route('tetapan.perihal.store') }}">
              @csrf
              <div class="modal fade" id="addTerima" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Perihal (Terimaan)</h5>
                    </div>
                    <div class="modal-body">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                          <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                          <input type="hidden" name="jenis" value="Terimaan">
                          <input type="hidden" name="kod" value="1">
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
            <table class="table table-bordered" id="">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Keterangan</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              <tbody>
                @foreach($terimaan as $terima)
                <tr>
                  <form class="form-horizontal" action="{{ route('tetapan.perihal.update', $terima->id) }}" method="post">
                  @csrf
                  @method('patch')
                  <td>{{ $loop->iteration }}</td>
                  <td><input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ $terima->keterangan }}"></td>
                  <td><button type="submit" class="btn btn-info btn-sm" title="Kemaskini"><i class="far fa-save"></i></button></td>
                </tr>
              </form>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-light">
          <h6 class="m-0 font-weight-bold text-primary">Perihal Kewangan (Perbelanjaan)</h6>
          <div class="float-right">
            <button type="button" class="btn btn-sm btn-success" title="Tambah Perihal (Perbelanjaan)" data-toggle="modal" data-target="#addBelanja"><i class="fas fa-plus"></i> Tambah</button>
            <!-- modal -->
            <form method="POST" action="{{ route('tetapan.perihal.store') }}">
              @csrf
              <div class="modal fade" id="addBelanja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Perihal (Perbelanjaan)</h5>
                    </div>
                    <div class="modal-body">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                          <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                          <input type="hidden" name="jenis" value="Perbelanjaan">
                          <input type="hidden" name="kod" value="2">
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
            <table class="table table-bordered" id="">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Keterangan</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              <tbody>
                @foreach($perbelanjaan as $belanja)
                <tr>
                  <form class="form-horizontal" action="{{ route('tetapan.perihal.update', $belanja->id) }}" method="post">
                  @csrf
                  @method('patch')
                  <td>{{ $loop->iteration }}</td>
                  <td><input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ $belanja->keterangan }}"></td>
                  <td><button type="submit" class="btn btn-info btn-sm" title="Kemaskini"><i class="far fa-save"></i></button></td>
                </tr>
              </form>
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
