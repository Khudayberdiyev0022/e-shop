<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{

  public function index()
  {
    $categories = Category::all();

    return view('categories.index', compact('categories'));
  }

  public function create()
  {
    return view('categories.create');
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      'title' => 'required|string',
    ]);
//    $data['slug'] = Str::slug($data['title']);

    Category::firstOrCreate($data);

    return redirect()->route('categories.index');
  }

  public function show(Category $category)
  {
    return view('categories.show', compact('category'));
  }

  public function edit(Category $category)
  {
    return view('categories.edit', compact('category'));
  }

  public function update(Request $request, Category $category)
  {
    $data = $request->validate([
      'title' => 'required|string',
    ]);
//    $data['slug'] = Str::slug($data['title']);

    $category->update($data);

    return redirect()->route('categories.index');
  }

  public function destroy(Category $category)
  {
    $category->delete();

    return redirect()->route('categories.index');
  }
}
