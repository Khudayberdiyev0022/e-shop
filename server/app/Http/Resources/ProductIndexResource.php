<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductIndexResource extends JsonResource
{

  public function toArray($request)
  {
    return [
      'id'          => $this->id,
      'category'    => CategoryResource::make($this->category),
      'title'       => $this->title,
      'slug'        => $this->slug,
      'description' => $this->description,
      'content'     => $this->content,
      'image_url'   => $this->imageUrl,
      'price'       => $this->price,
      'quantity'    => $this->qunatity,
      'views'       => $this->views,
    ];
  }
}
