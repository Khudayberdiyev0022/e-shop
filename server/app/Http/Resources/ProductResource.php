<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

  public function toArray($request)
  {
    return [
      'id'            => $this->id,
      'category_id'   => $this->category_id,
      'title'         => $this->title,
      'slug'          => $this->slug,
      'description'   => $this->description,
      'content'       => $this->content,
      'preview_image' => $this->preview_image,
      'price'         => $this->price,
      'quantity'      => $this->qunatity,
      'views'         => $this->views,
      'is_published'  => $this->is_published,
    ];
  }
}
