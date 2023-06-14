<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

  public function index()
  {
//    $categories = Category::with('products')->whereRelation('products', 'is_published', '=', 1)->get();
//
//    $categories = Category::whereHas('products', function ($query) {
//      return $query->where('is_published', '=', 1);
//    })->get();

    $categories = Category::with([
      "products" => function ($q) {
        $q->where('products.is_published', '=', 1);
      },
    ])->get();

    return CategoryResource::collection($categories);
  }

  public function store(Request $request)
  {
    //
  }

  public function show(Category $category)
  {
    //
  }

  public function update(Request $request, Category $category)
  {
    //
  }

  public function destroy(Category $category)
  {
    //
  }
}
