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
    ]);
//    \App\Models\Category::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
