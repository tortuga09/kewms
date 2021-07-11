<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KutipanTabung;
use App\Organisasi;
use PDF;

class TabungController extends Controller
{
  public function borang()
  {
    return view('tabung.borang');
  }

  public function simpan(Request $request)
  { // return $request;
    $data = $request->all();

    KutipanTabung::create($data);

    return redirect()->route('tabung.kutipan.penyata')->with('success', "Rekod kutipan tabung telah ditambah.");
  }

  public function cetak_borang($id)
  {
    $organisasi = Organisasi::first();
    $borang = KutipanTabung::find($id);
    $pdf = PDF::loadView('tabung.borang-kutipan', compact('organisasi', 'borang'))->setPaper('a4', 'potrait');
    return $pdf->download('Kutipan-Tabung-'.$borang->tarikh_kutipan.'.pdf');
  }

  public function penyata()
  {
    $kutipan = KutipanTabung::orderBy('tarikh_kutipan', 'desc')->get();
    return view('tabung.penyata', compact('kutipan'));
  }

  public function cetak_penyata()
  {
    $organisasi = Organisasi::first();
    $kutipan = KutipanTabung::orderBy('tarikh_kutipan', 'asc')->get();
    $pdf = PDF::loadView('tabung.penyata-kutipan', compact('organisasi', 'kutipan'))->setPaper('a4', 'potrait');
    return $pdf->download('Penyata-Kutipan-Tabung.pdf');
  }

  public function tarikh(Request $request)
  { //dd($request);
    $mula = $request->input('tarikh_mula'); //dd($start);
    $akhir = $request->input('tarikh_akhir');

    $kutipan = KutipanTabung::whereBetween('tarikh_kutipan', [$mula, $akhir])->orderBy('tarikh_kutipan', 'asc')->get();

    return view('tabung.tarikh', compact('mula', 'akhir', 'kutipan'));
  }

  public function cetak_tarikh(Request $request)
  {
    $organisasi = Organisasi::first();
    $mula = $request->input('mula'); //dd($start);
    $akhir = $request->input('akhir');
    $kutipan = KutipanTabung::whereBetween('tarikh_kutipan', [$mula, $akhir])->orderBy('tarikh_kutipan', 'asc')->get();
    $pdf = PDF::loadView('tabung.penyata-tarikh', compact('organisasi', 'mula', 'akhir', 'kutipan'))->setPaper('a4', 'potrait');
    return $pdf->download('Penyata-Kutipan-Tabung-'.$mula.'-hingga-'.$akhir.'.pdf');
  }
}
