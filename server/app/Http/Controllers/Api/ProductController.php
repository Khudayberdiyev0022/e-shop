<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

  public function index()
  {
    $products = Product::all();

    return ProductResource::collection($products);
  }

  public function store(Request $request)
  {
    //
  }

  public function show(Product $product)
  {
    //
  }

  public function update(Request $request, Product $product)
  {
    //
  }

  public function destroy(Product $product)
  {
    //
  }
}
