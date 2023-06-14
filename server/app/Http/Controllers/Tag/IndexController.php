<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{

  public function index()
  {
    $tags = Tag::all();

    return view('tags.index', compact('tags'));
  }

  public function create()
  {
    return view('tags.create');
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'title' => 'required|string',
    ]);
//    $data['slug'] = Str::slug($data['title']);

    Tag::firstOrCreate($data);

    return redirect()->route('tags.index');
  }

  public function show(Tag $tag)
  {
    return view('tags.show', compact('tag'));
  }

  public function edit(Tag $tag)
  {
    return view('tags.edit', compact('tag'));
  }

  public function update(Request $request, Tag $tag)
  {
    $data = $request->validate([
      'title' => 'required|string',
    ]);
//    $data['slug'] = Str::slug($data['title']);

    $tag->update($data);

    return redirect()->route('tags.index');
  }

  public function destroy(Tag $tag)
  {
    $tag->delete();

    return redirect()->route('tags.index');
  }
}
