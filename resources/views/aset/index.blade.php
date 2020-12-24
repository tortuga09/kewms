@extends('layouts.master')

@section('css')
<link href="{{ asset('theme') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengurusan Aset</h1>
  </div>

  <div class="row">
    <div class="col-md-12">
      @include('components.alert')
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-light">
          <h6 class="m-0 font-weight-bold text-primary">Senarai Harta Alih Dan Harta Tidak Alih</h6>
          <div class="float-right">
            <button type="button" class="btn btn-sm btn-success" title="Tambah Aset" data-toggle="modal" data-target="#addAset"><i class="fas fa-plus"></i> Tambah</button>
            <a href="{{ route('aset.print') }}" class="btn btn-sm btn-secondary" title="Cetak"><i class="fas fa-print"></i> Cetak</a>
            <!-- modal -->
            <form method="POST" action="{{ route('aset.store') }}">
              @csrf
              <div class="modal fade" id="addAset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Aset</h5>
                    </div>
                    <div class="modal-body">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Kategori Harta</label>
                        <div class="col-sm-8">
                          <select class="form-control" name="kategori" required>
                            <option value="" selected disabled>-- Pilih --</option>
                            <option value="HA">Harta Alih</option>
                            <option value="HTA">Harta Tidak Alih</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Aset</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama_aset" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Model / Siri</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="model" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Pembekal</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="pembekal" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tarikh Beli</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="tarikh_beli" id="tarikh_beli" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-8">
                          <input type="number" step="0.01" class="form-control" name="harga" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Lokasi</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="lokasi" required>
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
            <table class="table table-bordered" id="aset">
              <thead>
                <tr>
                  <th>#</th>
                  <th>No. Rujukan</th>
                  <th>Nama Aset</th>
                  <th>Model / Siri</th>
                  <th>Pembekal</th>
                  <th>Tarikh Beli</th>
                  <th>Harga (RM)</th>
                  <th>Lokasi</th>
                  <th>Status</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              <tbody>
                @foreach($asets as $aset)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $aset->no_rujukan }}</td>
                  <td>{{ $aset->nama_aset }}</td>
                  <td>{{ $aset->model }}</td>
                  <td>{{ $aset->pembekal }}</td>
                  <td>{{ date('d M Y', strtotime($aset->tarikh_beli)) }}</td>
                  <td>{{ number_format($aset->harga, 2) }}</td>
                  <td>{{ $aset->lokasi }}</td>
                  <td class="{{ ($aset->status == 'Lupus') ? 'text-danger' : '' }}">{{ $aset->status }}</td>
                  <td>
                    <button class="btn btn-sm btn-outline-primary" title="Edit Aset" data-toggle="modal" data-target="#editAset-{{ $aset->id }}"><i class="far fa-edit"></i> Edit</button>
                    <!-- modal -->
                    <form method="POST" action="{{ route('aset.update', $aset->id) }}">
                      @csrf
                      @method('patch')
                      <div class="modal fade" id="editAset-{{ $aset->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabelLogout">Kemaskini Aset</h5>
                            </div>
                            <div class="modal-body">
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Kategori Harta</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="" value="{{ ($aset->kategori == 'HA') ? 'Harta Alih' : 'Harta Tidak Alih' }}" readonly>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">No. Rujukan</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="" value="{{ $aset->no_rujukan }}" readonly>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Aset</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="nama_aset" value="{{ $aset->nama_aset }}" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Model / Siri</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="model" value="{{ $aset->model }}" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Pembekal</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="pembekal" value="{{ $aset->pembekal }}" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Tarikh Beli</label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" name="tarikh_beli" id="tarikh_beli-edit" value="{{ $aset->tarikh_beli }}" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Harga</label>
                                <div class="col-sm-8">
                                  <input type="number" step="0.01" class="form-control" name="harga" value="{{ $aset->harga }}" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Lokasi</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="lokasi" value="{{ $aset->lokasi }}" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-8">
                                  <select class="form-control" name="status" required>
                                    <option value="" selected disabled>-- Pilih --</option>
                                    <option value="Guna" {{ ($aset->status == 'Guna') ? 'selected' : '' }}>Guna</option>
                                    <option value="Lupus" {{ ($aset->status == 'Lupus') ? 'selected' : '' }}>Lupus</option>
                                  </select>
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
  $('#aset').DataTable(); // ID From dataTable
});

$('#tarikh_beli').datepicker({
  format: 'yyyy-mm-dd',
  autoclose: true,
  todayHighlight: true
});

$('#tarikh_beli-edit').datepicker({
  format: 'yyyy-mm-dd',
  autoclose: true,
  todayHighlight: true
});
</script>
@endsection
