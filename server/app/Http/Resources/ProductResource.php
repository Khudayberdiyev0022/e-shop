<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

  public function toArray($request)
  {
    $products = Product::where('group_id', $this->group_id)->get();

    return [
      'id'             => $this->id,
      'category'       => new CategoryResource($this->category),
      'title'          => $this->title,
      'slug'           => $this->slug,
      'description'    => $this->description,
      'content'        => $this->content,
      'image_url'      => $this->imageUrl,
      'price'          => $this->price,
      'quantity'       => $this->qunatity,
      'views'          => $this->views,
      'group_products' => ProductMinResource::collection($products),
    ];
  }
}
