<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{

  public function index()
  {
    $users = User::all();

    return view('users.index', compact('users'));
  }

  public function create()
  {
    return view('users.create');
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'firstname' => 'required|string',
      'lastname'  => 'required|string',
      'address'   => 'string',
      'gender'    => 'required|integer',
      'phone'     => 'string',
      'email'     => 'required|email|unique:users,email',
      'password'  => 'required|confirmed',
    ]);

    User::firstOrCreate([
      'email' => $data['email'],
    ], $data);

    return redirect()->route('users.index');
  }

  public function show(User $user)
  {
    return view('users.show', compact('user'));
  }

  public function edit(User $user)
  {
    return view('users.edit', compact('user'));
  }

  public function update(Request $request, User $user)
  {
    $data = $request->validate([
      'firstname' => 'required|string',
      'lastname'  => 'required|string',
      'address'   => 'string',
      'gender'    => 'required|integer',
      'phone'     => 'string',
      'email'     => 'required|email|unique:users,email',
    ]);
    $user->update($data);

    return redirect()->route('users.index');
  }

  public function destroy(User $user)
  {
    $user->delete();

    return redirect()->route('users.index');
  }
}
