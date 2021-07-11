<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function index()
  {
    $users = User::where('role', '!=', 'Admin')->get();
    return view('tetapan.pengguna.index', compact('users'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'email' => 'required|unique:users',
    ]);

    $data = $request->except('password');
    $data['password'] = bcrypt($request->input('password'));
    $data['role'] = 'User';

    User::create($data);

    return redirect()->route('tetapan.pengguna.index')->with('success', 'Pengguna telah ditambah.');
  }

  public function update(Request $request, $id)
  {
    $user = User::find($id); //dd($auth);

    $request->validate([
      'email' => 'required|unique:users,email,'.$id,
    ]);

    $data = $request->except('password'); //dd($data);

    if (!empty($request->input('password')))
    {
      $data['password'] = bcrypt($request->input('password'));
    }

    $user->update($data);

    return redirect()->route('tetapan.pengguna.index')->with('success', 'Pengguna telah dikemaskini.');
  }

  public function destroy($id)
  {
    $user = User::find($id)->delete();

    return redirect()->route('tetapan.pengguna.index')->with('success', 'Pengguna telah dihapus.');
  }
}
