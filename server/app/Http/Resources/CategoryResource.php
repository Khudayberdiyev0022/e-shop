<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{

  public function toArray($request)
  {
    return [
      'title'    => $this->title,
      'slug'     => $this->slug,
      'products' => $this->products,
    ];
  }
}
