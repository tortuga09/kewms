<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LookupPerihal;
use App\Bank;
use App\Organisasi;

class TetapanController extends Controller
{
  public function indexOrganisasi()
  {
    $organisasi = Organisasi::first();
    return view('tetapan.organisasi.index', compact('organisasi'));
  }

  public function updateOrganisasi(Request $request, $id)
  {
    $data = $request->all();
    $org = Organisasi::find($id)->update($data);
    return redirect()->route('tetapan.organisasi.index')->with('success', 'Maklumat Organisasi telah dikemaskini.');
  }


  public function indexBank()
  {
    $banks = Bank::all();
    return view('tetapan.sistem.bank', compact('banks'));
  }

  public function storeBank(Request $request)
  { //dd($request);
    $data = $request->all();
    Bank::create($data);

    return redirect()->route('tetapan.bank.index')->with('success', "Maklumat bank telah ditambah.");
  }

  public function updateBank(Request $request, $id)
  { //dd($request, $id);
    $data = $request->all();
    Bank::find($id)->update($data);

    return redirect()->route('tetapan.bank.index')->with('success', "Maklumat bank telah dikemaskini.");
  }


  public function indexPerihal()
  {
    $terimaan = LookupPerihal::where('jenis', 'Terimaan')->get();
    $perbelanjaan = LookupPerihal::where('jenis', 'Perbelanjaan')->get();
    return view('tetapan.sistem.perihal', compact('terimaan', 'perbelanjaan'));
  }

  public function storePerihal(Request $request)
  { // return $request;
    $data = $request->all();
    LookupPerihal::create($data);

    return redirect()->route('tetapan.perihal.index')->with('success', "Perihal Kewangan telah ditambah.");
  }

  public function updatePerihal(Request $request, $id)
  { // dd($request, $id);
    $data = $request->all();
    LookupPerihal::find($id)->update($data);
    return redirect()->route('tetapan.perihal.index')->with('success', "Perihal Kewangan telah dikemaskini.");
  }
}
