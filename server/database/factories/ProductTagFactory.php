<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductTagFactory extends Factory
{

  public function definition()
  {
    return [
      'product_id' => rand(1, 80),
      'tag_id'     => rand(1, 14),
    ];
  }
}
