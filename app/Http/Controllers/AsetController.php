<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aset;
use App\Organisasi;
use PDF;

class AsetController extends Controller
{
  public function index()
  {
    $asets = Aset::orderBy('no_rujukan', 'asc')->get();
    return view('aset.index', compact('asets'));
  }

  public function store(Request $request)
  { // return $request;
    $organisasi = Organisasi::first();
    $data = $request->all();
    $year = explode('-', $data['tarikh_beli']);

    switch ($data['kategori'])
    {
      case 'HA':
      $check = Aset::where('kategori', 'HA')->where('tahun_beli', $year[0])->get();

      if($check->isEmpty())
      {
        $aset = new Aset;
        $aset->kategori = $data['kategori'];
        $aset->no_rujukan = $organisasi->kod.'/'.$data['kategori'].'/'.$year[0].'/1';
        $aset->nama_aset = $data['nama_aset'];
        $aset->model = $data['model'];
        $aset->pembekal = $data['pembekal'];
        $aset->tahun_beli = $year[0];
        $aset->tarikh_beli = $data['tarikh_beli'];
        $aset->harga = $data['harga'];
        $aset->lokasi = $data['lokasi'];
        $aset->save();

        return redirect()->route('aset.index')->with('success', "Aset telah ditambah.");
      }
      else
      {
        $a_check = Aset::where('kategori', 'HA')->where('tahun_beli', $year[0])->orderBy('id', 'desc')->first();
        $a_ref = explode('/', $a_check->no_rujukan);

        if($a_ref[2] != $year[0])
        {
          $n_ref = $organisasi->kod.'/'.$data['kategori'].'/'.$year[0].'/1';
        }

        else
        {
          $n_ref = $organisasi->kod.'/'.$data['kategori'].'/'.$a_ref[2].'/'.($a_ref[3]+1);
        }

        $aset = new Aset;
        $aset->kategori = $data['kategori'];
        $aset->no_rujukan = $n_ref;
        $aset->nama_aset = $data['nama_aset'];
        $aset->model = $data['model'];
        $aset->pembekal = $data['pembekal'];
        $aset->tahun_beli = $year[0];
        $aset->tarikh_beli = $data['tarikh_beli'];
        $aset->harga = $data['harga'];
        $aset->lokasi = $data['lokasi'];
        $aset->save();

        return redirect()->route('aset.index')->with('success', "Aset telah ditambah.");
      }
      break;

      case 'HTA':
        $check = Aset::where('kategori', 'HTA')->where('tahun_beli', $year[0])->get();

        if($check->isEmpty())
        {
          $aset = new Aset;
          $aset->kategori = $data['kategori'];
          $aset->no_rujukan = $organisasi->kod.'/'.$data['kategori'].'/'.$year[0].'/1';
          $aset->nama_aset = $data['nama_aset'];
          $aset->model = $data['model'];
          $aset->pembekal = $data['pembekal'];
          $aset->tahun_beli = $year[0];
          $aset->tarikh_beli = $data['tarikh_beli'];
          $aset->harga = $data['harga'];
          $aset->lokasi = $data['lokasi'];
          $aset->save();

          return redirect()->route('aset.index')->with('success', "Aset telah ditambah.");
        }
        else
        {
          $a_check = Aset::where('kategori', 'HTA')->where('tahun_beli', $year[0])->orderBy('id', 'desc')->first();
          $a_ref = explode('/', $a_check->no_rujukan);

          if($a_ref[2] != $year[0])
          {
            $n_ref = $organisasi->kod.'/'.$data['kategori'].'/'.$year[0].'/1';
          }

          else
          {
            $n_ref = $organisasi->kod.'/'.$data['kategori'].'/'.$a_ref[2].'/'.($a_ref[3]+1);
          }

          $aset = new Aset;
          $aset->kategori = $data['kategori'];
          $aset->no_rujukan = $n_ref;
          $aset->nama_aset = $data['nama_aset'];
          $aset->model = $data['model'];
          $aset->pembekal = $data['pembekal'];
          $aset->tahun_beli = $year[0];
          $aset->tarikh_beli = $data['tarikh_beli'];
          $aset->harga = $data['harga'];
          $aset->lokasi = $data['lokasi'];
          $aset->save();

          return redirect()->route('aset.index')->with('success', "Aset telah ditambah.");
        }
      break;
    }
  }

  public function update(Request $request, $id)
  { //dd($request, $id);
    $data = $request->all();
    $aset = Aset::find($id)->update($data);

    return redirect()->route('aset.index')->with('success', "Aset telah dikemaskini.");
  }

  public function print()
  {
    $organisasi = Organisasi::first();
    $asets = Aset::orderBy('no_rujukan', 'asc')->get();
    $pdf = PDF::loadView('aset.pdf', compact('asets', 'organisasi'))->setPaper('a4', 'landscape');

    return $pdf->download('Senarai Aset.pdf');
  }
}
