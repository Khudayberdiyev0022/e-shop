<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{

    public function index()
    {
      $products = Product::all();

      return view('products.index', compact('products'));
    }

    public function create()
    {
      return view('products.create');
    }

    public function store(Request $request)
    {
      $data = $request->all();
      $data['slug'] = Str::slug($data['title']);

      Product::create($data);

      return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
      return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
      return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
      $data = $request->all();
      $data['slug'] = Str::slug($data['title']);
      $product->update($data);

      return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
      $product->delete();

      return redirect()->route('products.index');
    }
}
