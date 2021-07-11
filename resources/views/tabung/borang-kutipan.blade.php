<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<link rel="stylesheet" href="{{ asset('css/pdf.css') }}">
<body>
  <p><strong>BORANG KUTIPAN TABUNG</strong></p>
  <p>MASJID/SURAU : {{ $organisasi->nama_organisasi }}</p>
  <p>TARIKH KUTIPAN : {{ date('d M Y', strtotime($borang->tarikh_kutipan)) }}</p>
  <table border="1" cellpadding="5px" width="100%">
    <tr>
      <th>Denominasi</th>
      <th>Bilangan (Keping)</th>
      <th>Jumlah (RM)</th>
    </tr>
    <tr>
      <td align="center">RM100</td>
      <td align="center">{{ $borang->rm100 }}</td>
      <td align="center">{{ number_format($borang->jum_rm100, 2) }}</td>
    </tr>
    <tr>
      <td align="center">RM50</td>
      <td align="center">{{ $borang->rm50 }}</td>
      <td align="center">{{ number_format($borang->jum_rm50, 2) }}</td>
    </tr>
    <tr>
      <td align="center">RM20</td>
      <td align="center">{{ $borang->rm20 }}</td>
      <td align="center">{{ number_format($borang->jum_rm20, 2) }}</td>
    </tr>
    <tr>
      <td align="center">RM10</td>
      <td align="center">{{ $borang->rm10 }}</td>
      <td align="center">{{ number_format($borang->jum_rm10, 2) }}</td>
    </tr>
    <tr>
      <td align="center">RM5</td>
      <td align="center">{{ $borang->rm5 }}</td>
      <td align="center">{{ number_format($borang->jum_rm5, 2) }}</td>
    </tr>
    <tr>
      <td align="center">RM1</td>
      <td align="center">{{ $borang->rm1 }}</td>
      <td align="center">{{ number_format($borang->jum_rm1, 2) }}</td>
    </tr>
    <tr>
      <td align="center">RM0.50</td>
      <td align="center">{{ $borang->rm05 }}</td>
      <td align="center">{{ number_format($borang->jum_rm05, 2) }}</td>
    </tr>
    <tr>
      <td align="center">RM0.20</td>
      <td align="center">{{ $borang->rm02 }}</td>
      <td align="center">{{ number_format($borang->jum_rm02, 2) }}</td>
    </tr>
    <tr>
      <td align="center">RM0.10</td>
      <td align="center">{{ $borang->rm01 }}</td>
      <td align="center">{{ number_format($borang->jum_rm01, 2) }}</td>
    </tr>
    <tr>
      <td align="center">RM0.05</td>
      <td align="center">{{ $borang->rm005 }}</td>
      <td align="center">{{ number_format($borang->jum_rm005, 2) }}</td>
    </tr>
    <tr>
      <th>JUMLAH BESAR</th>
      <th align="center">{{ $borang->jumlah_keping }}</th>
      <th align="center">{{ number_format($borang->jumlah_besar, 2) }}</th>
    </tr>
  </table>
  <br>
  <p>
    Dikira oleh :
    <ol>
      <li style="padding-bottom:10px;">{{ $borang->pegawai_1 }}</li>
      <li style="padding-bottom:10px;">{{ $borang->pegawai_2 }}</li>
      <li style="padding-bottom:10px;">{{ $borang->pegawai_3 }}</li>
    </ol>
  </p>
</body>
</html>
