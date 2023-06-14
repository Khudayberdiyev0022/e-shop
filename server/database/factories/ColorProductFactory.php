<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ColorProductFactory extends Factory
{

  public function definition()
  {
    return [
      'color_id'   => rand(1, 10),
      'product_id' => rand(1, 80),
    ];
  }
}
