<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ColorResource extends JsonResource
{

  public function toArray($request)
  {
    return [
      'title'    => $this->title,
      'hex_code' => $this->hex_code,
      'products' => $this->products,
    ];
  }
}
