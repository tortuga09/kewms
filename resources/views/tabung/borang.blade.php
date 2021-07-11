@extends('layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kutipan Tabung</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      @include('components.alert')
      <form class="" action="{{ route('tabung.kutipan.simpan') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-light">
            <h6 class="m-0 font-weight-bold text-primary">Borang Kutipan Tabung</h6>
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tarikh Kutipan</label>
              <div class="col-sm-2">
                <input type="text" name="tarikh_kutipan" id="tarikh_kutipan" class="form-control" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <table class="table table-bordered">
                  <tr>
                    <th>Denominasi</th>
                    <th>Bilangan (Keping)</th>
                    <th>Jumlah (RM)</th>
                  </tr>
                  <tr>
                    <td>RM100</td>
                    <td><input type="number" step="1" min="0" value="0" name="rm100" id="rm100" class="form-control" onchange="calculate()" required></td>
                    <td><input type="text" name="jum_rm100" id="jum_rm100" class="form-control" readonly></td>
                  </tr>
                  <tr>
                    <td>RM50</td>
                    <td><input type="number" step="1" min="0" value="0" name="rm50" id="rm50" class="form-control" onchange="calculate()" required></td>
                    <td><input type="text" name="jum_rm50" id="jum_rm50" class="form-control" readonly></td>
                  </tr>
                  <tr>
                    <td>RM20</td>
                    <td><input type="number" step="1" min="0" value="0" name="rm20" id="rm20" class="form-control" onchange="calculate()" required></td>
                    <td><input type="text" name="jum_rm20" id="jum_rm20" class="form-control" readonly></td>
                  </tr>
                  <tr>
                    <td>RM10</td>
                    <td><input type="number" step="1" min="0" value="0" name="rm10" id="rm10" class="form-control" onchange="calculate()" required></td>
                    <td><input type="text" name="jum_rm10" id="jum_rm10" class="form-control" readonly></td>
                  </tr>
                  <tr>
                    <td>RM5</td>
                    <td><input type="number" step="1" min="0" value="0" name="rm5" id="rm5" class="form-control" onchange="calculate()" required></td>
                    <td><input type="text" name="jum_rm5" id="jum_rm5" class="form-control" readonly></td>
                  </tr>
                  <tr>
                    <td>RM1</td>
                    <td><input type="number" step="1" min="0" value="0" name="rm1" id="rm1" class="form-control" onchange="calculate()" required></td>
                    <td><input type="text" name="jum_rm1" id="jum_rm1" class="form-control" readonly></td>
                  </tr>
                </table>
              </div>
              <div class="col-md-6">
                <table class="table table-bordered">
                  <tr>
                    <th>Denominasi</th>
                    <th>Bilangan (Keping)</th>
                    <th>Jumlah (RM)</th>
                  </tr>
                  <tr>
                    <td>RM0.50</td>
                    <td><input type="number" step="1" min="0" value="0" name="rm05" id="rm05" class="form-control" onchange="calculate()" required></td>
                    <td><input type="text" name="jum_rm05" id="jum_rm05" class="form-control" readonly></td>
                  </tr>
                  <tr>
                    <td>RM0.20</td>
                    <td><input type="number" step="1" min="0" value="0" name="rm02" id="rm02" class="form-control" onchange="calculate()" required></td>
                    <td><input type="text" name="jum_rm02" id="jum_rm02" class="form-control" readonly></td>
                  </tr>
                  <tr>
                    <td>RM0.10</td>
                    <td><input type="number" step="1" min="0" value="0" name="rm01" id="rm01" class="form-control" onchange="calculate()" required></td>
                    <td><input type="text" name="jum_rm01" id="jum_rm01" class="form-control" readonly></td>
                  </tr>
                  <tr>
                    <td>RM0.05</td>
                    <td><input type="number" step="1" min="0" value="0" name="rm005" id="rm005" class="form-control" onchange="calculate()" required></td>
                    <td><input type="text" name="jum_rm005" id="jum_rm005" class="form-control" readonly></td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Jumlah Besar</td>
                    <td><input type="text" name="jumlah_keping" id="jumlah_keping" class="form-control" readonly></td>
                    <td><input type="text" name="jumlah_besar" id="jumlah_besar" class="form-control" readonly></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 col-form-label font-weight-bold">Dikira oleh</label>
              <div class="row">
                <div class="col-sm-4 mb-2">
                  <input type="text" name="pegawai_1" id="pegawai_1" class="form-control" placeholder="1." required>
                </div>
                <div class="col-sm-4 mb-2">
                  <input type="text" name="pegawai_2" id="pegawai_2" class="form-control" placeholder="2." required>
                </div>
                <div class="col-sm-4 mb-2">
                  <input type="text" name="pegawai_3" id="pegawai_3" class="form-control" placeholder="3." required>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-center alert-light">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$('#tarikh_kutipan').datepicker({
  format: 'yyyy-mm-dd',
  autoclose: true,
  todayHighlight: true
});

calculate = function()
{
  var rm100 = document.getElementById('rm100').value;
  var rm50 = document.getElementById('rm50').value;
  var rm20 = document.getElementById('rm20').value;
  var rm10 = document.getElementById('rm10').value;
  var rm5 = document.getElementById('rm5').value;
  var rm1 = document.getElementById('rm1').value;
  var rm05 = document.getElementById('rm05').value;
  var rm02 = document.getElementById('rm02').value;
  var rm01 = document.getElementById('rm01').value;
  var rm005 = document.getElementById('rm005').value;

  document.getElementById('jumlah_keping').value = parseInt(rm100)+parseInt(rm50)+parseInt(rm20)+parseInt(rm10)+parseInt(rm5)+parseInt(rm1)+parseInt(rm05)+parseInt(rm02)+parseInt(rm01)+parseInt(rm005);

  var qqq = parseInt(rm01)*0.10;

  document.getElementById('jum_rm100').value = (parseInt(rm100)*100).toFixed(2);
  document.getElementById('jum_rm50').value = (parseInt(rm50)*50).toFixed(2);
  document.getElementById('jum_rm20').value = (parseInt(rm20)*20).toFixed(2);
  document.getElementById('jum_rm10').value = (parseInt(rm10)*10).toFixed(2);
  document.getElementById('jum_rm5').value = (parseInt(rm5)*5).toFixed(2);
  document.getElementById('jum_rm1').value = (parseInt(rm1)*1).toFixed(2);
  document.getElementById('jum_rm05').value = (parseInt(rm05)*0.5).toFixed(2);
  document.getElementById('jum_rm02').value = (parseInt(rm02)*0.2).toFixed(2);
  document.getElementById('jum_rm01').value = (parseInt(rm01)*0.10).toFixed(2);
  document.getElementById('jum_rm005').value = (parseInt(rm005)*0.05).toFixed(2);

  document.getElementById('jumlah_besar').value =
  (parseInt(document.getElementById('jum_rm100').value) +
  parseInt(document.getElementById('jum_rm50').value) +
  parseInt(document.getElementById('jum_rm20').value) +
  parseInt(document.getElementById('jum_rm10').value) +
  parseInt(document.getElementById('jum_rm5').value) +
  parseInt(document.getElementById('jum_rm1').value) +
  parseFloat(document.getElementById('jum_rm05').value) +
  parseFloat(document.getElementById('jum_rm02').value) +
  parseFloat(document.getElementById('jum_rm01').value) +
  parseFloat(document.getElementById('jum_rm005').value)).toFixed(2);
}
</script>
@endsection
