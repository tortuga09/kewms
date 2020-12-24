<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<link rel="stylesheet" href="{{ asset('css/pdf.css') }}">
<body>
  <strong>DAFTAR HARTA ALIH DAN HARTA TIDAK ALIH</strong>
  <br><br>
  MASJID : ...
  <br><br>
  <table border="1" width="100%">
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
    </tr>
    @foreach($asets as $aset)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $aset->no_rujukan }}</td>
      <td>{{ $aset->nama_aset }}</td>
      <td>{{ $aset->model }}</td>
      <td>{{ $aset->pembekal }}</td>
      <td>{{ date('d M Y', strtotime($aset->tarikh_beli)) }}</td>
      <td class="text-right">{{ number_format($aset->harga, 2) }}</td>
      <td>{{ $aset->lokasi }}</td>
      <td>{{ $aset->status }}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
