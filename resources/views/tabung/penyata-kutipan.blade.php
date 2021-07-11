<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<link rel="stylesheet" href="{{ asset('css/pdf.css') }}">
<body>
  <p><strong>PENYATA KUTIPAN TABUNG</strong></p>
  <p>MASJID/SURAU : {{ $organisasi->nama_organisasi }}</p>

  <table border="1" width="100%">
    <tr>
      <th>#</th>
      <th>Tarikh</th>
      <th>Jumlah Kutipan (RM)</th>
      <th>Dikira oleh</th>
    </tr>
    @foreach($kutipan as $kutip)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td nowrap>{{ date('d M Y', strtotime($kutip->tarikh_kutipan)) }}</td>
      <td align="center">{{ number_format($kutip->jumlah_besar, 2) }}</td>
      <td>
        <ol>
          <li>{{ $kutip->pegawai_1 }}</li>
          <li>{{ $kutip->pegawai_2 }}</li>
          <li>{{ $kutip->pegawai_3 }}</li>
        </ol>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>
