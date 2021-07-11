<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KutipanTabung;

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

  public function penyata()
  {
    $kutipan = KutipanTabung::orderBy('tarikh_kutipan', 'desc')->get();
    return view('tabung.penyata', compact('kutipan'));
  }

  public function tarikh(Request $request)
  { //dd($request);
    $mula = $request->input('tarikh_mula'); //dd($start);
    $akhir = $request->input('tarikh_akhir');

    $kutipan = KutipanTabung::whereBetween('tarikh_kutipan', [$mula, $akhir])->orderBy('tarikh_kutipan', 'asc')->get();

    return view('tabung.tarikh', compact('mula', 'akhir', 'kutipan'));
  }
}
