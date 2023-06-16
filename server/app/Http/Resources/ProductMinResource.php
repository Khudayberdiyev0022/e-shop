<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductMinResource extends JsonResource
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
      //      'colors'      => new ColorResource($this->colors),
      'image_url'   => $this->imageUrl,
      'price'       => $this->price,
      'quantity'    => $this->qunatity,
      'views'       => $this->views,
      'colors'      => ColorResource::collection($this->colors),

    ];
  }
}
