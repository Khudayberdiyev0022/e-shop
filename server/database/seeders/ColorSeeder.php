<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{

  public function run()
  {
    Color::create(['title' => 'Black', 'hex_code' => '#000']);
    Color::create(['title' => 'Red', 'hex_code' => '#f00']);
    Color::create(['title' => 'Orange', 'hex_code' => '#ffa900']);
    Color::create(['title' => 'Yellow', 'hex_code' => '#efff00']);
    Color::create(['title' => 'Green', 'hex_code' => '#26b602']);
    Color::create(['title' => 'Aqua', 'hex_code' => '#00de93']);
    Color::create(['title' => 'Blue', 'hex_code' => '#05a6f9']);
    Color::create(['title' => 'Dark blue', 'hex_code' => '#00015b']);
    Color::create(['title' => 'Purple', 'hex_code' => '#34005b']);
    Color::create(['title' => 'Pink', 'hex_code' => '#e50283']);
  }
}
