<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{

  public function definition()
  {
    return [
      'category_id'   => rand(1, 6),
      'group_id'      => rand(1, 6),
      'title'         => fake()->sentence,
      'description'   => fake()->realText,
      'content'       => fake()->realText,
      'preview_image' => 'storage/uploads/fake.jpg',
      'price'         => rand(50, 1000),
      'quantity'      => rand(1, 50),
      'views'         => rand(30, 1500),
      'is_published'  => 1,
    ];
  }
}
