<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

  public function run()
  {
    Category::create(['title' => 'Спальня']);
    Category::create(['title' => 'Украшение']);
    Category::create(['title' => 'Кухня']);
    Category::create(['title' => 'Одежда']);
    Category::create(['title' => 'Офис']);
    Category::create(['title' => 'Осветительные приборы']);
  }
}
