<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function index()
  {
    // return view('home');
    return redirect()->route('dashboard');
  }

  public function dashboard()
  {
    return view('home');
  }


  public function profil()
  {
    return view('profil');
  }

  public function profilUpdate(Request $request)
  {
    $auth = User::find(Auth::id()); //dd($auth);

    $request->validate([
      'email' => 'required|unique:users,email,'.$auth->id,
    ]);

    $data = $request->except('password'); //dd($data);

    if (!empty($request->input('password')))
    {
      $data['password'] = bcrypt($request->input('password'));
    }

    $auth->update($data);

    return redirect()->route('profil')->with('success', 'Profil telah dikemaskini.');
  }
}
