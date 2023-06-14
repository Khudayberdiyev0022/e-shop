<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{

  public function run()
  {
    Group::create(['title' => 'Спальная камот']);
    Group::create(['title' => 'Украшение для зала']);
    Group::create(['title' => 'Кухенная техника']);
    Group::create(['title' => 'Одежды для детей']);
    Group::create(['title' => 'Офисная техника']);
    Group::create(['title' => 'Офисная кресло']);
  }
}
