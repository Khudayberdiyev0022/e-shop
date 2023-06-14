<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class IndexController extends Controller
{

  public function index()
  {
    $groups = Group::all();

    return view('groups.index', compact('groups'));
  }

  public function create()
  {
    return view('groups.create');
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'title' => 'required|string',
    ]);
    Group::firstOrCreate($data);

    return redirect()->route('groups.index');
  }

  public function show(Group $group)
  {
    return view('groups.show', compact('group'));
  }

  public function edit(Group $group)
  {
    return view('groups.edit', compact('group'));
  }

  public function update(Request $request, Group $group)
  {
    $data = $request->validate([
      'title' => 'required|string',
    ]);
    $group->update($data);

    return redirect()->route('groups.index');
  }

  public function destroy(Group $group)
  {
    $group->delete();

    return redirect()->route('groups.index');
  }
}
