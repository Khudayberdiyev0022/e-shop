<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

  public function toArray($request)
  {
    return [
      'id'          => $this->id,
      'category'    => new CategoryResource($this->category),
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
