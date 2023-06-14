<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class IndexController extends Controller
{

  public function index()
  {
    $colors = Color::all();

    return view('colors.index', compact('colors'));
  }

  public function create()
  {
    return view('colors.create');
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'title'    => 'required|string',
      'hex_code' => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
    ]);

    Color::firstOrCreate($data);

    return redirect()->route('colors.index');
  }

  public function show(Color $color)
  {
    return view('colors.show', compact('color'));
  }

  public function edit(Color $color)
  {
    return view('colors.edit', compact('color'));
  }

  public function update(Request $request, Color $color)
  {
    $data = $request->validate([
      'title'    => 'required|string',
      'hex_code' => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
    ]);
    $color->update($data);

    return redirect()->route('colors.index');
  }

  public function destroy(Color $color)
  {
    $color->delete();

    return redirect()->route('colors.index');
  }
}
