@extends('layouts.master')

@section('css')
<link href="{{ asset('theme') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kutipan Tabung</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="" method="post" action="{{ route('tabung.kutipan.tarikh') }}">
        @csrf
        <div class="card shadow mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-light">
            <h6 class="m-0 font-weight-bold text-primary">Transaksi Mengikut Julat Tarikh</h6>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label text-center">Tarikh Mula</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control text-center" name="tarikh_mula" id="tarikh_mula" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label text-center">Tarikh Akhir</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control text-center" name="tarikh_akhir" id="tarikh_akhir" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-center alert-light">
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-search-dollar"></i> Cari</button>
          </div>
        </div>
      </form>

      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-light">
          <h6 class="m-0 font-weight-bold text-primary">Penyata Kutipan Tabung dari {{ date('d M Y', strtotime($mula)) }} hingga {{ date('d M Y', strtotime($akhir)) }}</h6>
          <a href="{{ route('tabung.kutipan.cetak.tarikh', ['mula' => $mula, 'akhir' => $akhir]) }}" class="btn btn-sm btn-secondary float-right" title="Cetak Penyata Kutipan"><i class="fas fa-print"></i> Cetak</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="penyata" width="100%">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tarikh</th>
                  <th>Kutipan (RM)</th>
                  <th>Dikira oleh</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              <tbody>
                @foreach($kutipan as $kutip)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td nowrap>{{ date('d M Y', strtotime($kutip->tarikh_kutipan)) }}</td>
                  <td class="text-right">{{ number_format($kutip->jumlah_besar, 2) }}</td>
                  <td>{{ $kutip->pegawai_1 }}<br>{{ $kutip->pegawai_2 }}<br>{{ $kutip->pegawai_3 }}</td>
                  <td>
                    <a href="{{ route('tabung.kutipan.cetak.borang', $kutip->id) }}" class="btn btn-sm btn-outline-primary" title="Cetak Penyata Kutipan"><i class="fas fa-print"></i> Cetak</a>
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
</div>
@endsection

@section('script')
<script src="{{ asset('theme') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('theme') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
  $('#penyata').DataTable(); // ID From dataTable
});

$('#tarikh_mula').datepicker({
  format: 'yyyy-mm-dd',
  autoclose: true,
  todayHighlight: true,
  endDate: '+0d'
});

$('#tarikh_akhir').datepicker({
  format: 'yyyy-mm-dd',
  autoclose: true,
  todayHighlight: true,
  endDate: '+0d'
  });
</script>
@endsection
