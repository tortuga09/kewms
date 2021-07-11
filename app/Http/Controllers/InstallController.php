<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Organisasi;

class InstallController extends Controller
{
  public function install()
  {
    $organisasi = Organisasi::count();
    $admin = User::count();
    if($organisasi == 0 || $admin == 0) {
      return view('install');
    }
    else {
      return redirect('/');
    }
  }

  public function install_store(Request $request)
  {
    $data = $request->except('password');
    $data['role'] = 'Admin';
    $data['password'] = bcrypt($request->input('password')); // return $data;
    User::create($data);
    Organisasi::create($data);
    return redirect()->route('login');
  }
}
