<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Str;

class IndexController extends Controller
{

  public function index()
  {
/*    Benchmark::dd([
      'withQuery' => fn() => Product::query()->orderByDesc('id')->get(),
      'noQuery' => fn() => Product::orderByDesc('id')->get(),
    ]);*/
    $products = Product::orderByDesc('id')->get();

    return view('products.index', compact('products'));
  }

  public function create()
  {
    $categories = Category::all();
    $tags       = Tag::all();
    $colors     = Color::all();

    return view('products.create', compact('categories', 'tags', 'colors'));
  }

  public function store(Request $request)
  {
    $data         = $request->validate([
      'category_id'   => 'required|integer',
      'title'         => 'required|string',
      'description'   => 'required|string',
      'content'       => 'required|string',
      'preview_image' => 'nullable|file',
      'price'         => 'required',
      'quantity'      => 'required',
      'is_published'  => 'required',
      'tags'          => 'nullable|array',
      'colors'        => 'nullable|array',
    ]);
    $data['slug'] = Str::slug($data['title']);

    if ($request->hasFile('preview_image')) {
      $preview_image         = $request->file('preview_image')->store('uploads', 'public');
      $data['preview_image'] = 'storage/'.$preview_image;
    }

    $product = Product::firstOrCreate([
      'title' => $data['title'],
    ], $data);

    $product->tags()->attach($data['tags']);
    $product->colors()->attach($data['colors']);

    return redirect()->route('products.index');
  }

  public function show(Product $product)
  {
    return view('products.show', compact('product'));
  }

  public function edit(Product $product)
  {
    $categories = Category::all();
    $tags       = Tag::all();
    $colors     = Color::all();

    return view('products.edit', compact('product', 'categories', 'tags', 'colors'));
  }

  public function update(Request $request, Product $product)
  {
    $data         = $request->all();
    $data['slug'] = Str::slug($data['title']);
    $product->update($data);

    $product->tags()->sync($data['tags']);
    $product->colors()->sync($data['colors']);

    return redirect()->route('products.index');
  }

  public function destroy(Product $product)
  {
    $product->tags()->detach();
    $product->colors()->detach();
    $product->delete();

    return redirect()->route('products.index');
  }
}
