<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

  public function run()
  {
    \App\Models\User::factory(20)->create();
    $this->call([
      CategorySeeder::class,
      ColorSeeder::class,
      TagSeeder::class,
      GroupSeeder::class,
    ]);
    \App\Models\Product::factory(80)->create();
    \App\Models\ColorProduct::factory(150)->create();
    \App\Models\ProductTag::factory(150)->create();
//    \App\Models\Category::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
