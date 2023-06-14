<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{

  public function run()
  {
    Tag::create(['title' => 'Инструменты']);
    Tag::create(['title' => 'Магазин']);
    Tag::create(['title' => 'Украшение']);
    Tag::create(['title' => 'В сети']);
    Tag::create(['title' => 'Мебель']);
    Tag::create(['title' => 'Красота']);
    Tag::create(['title' => 'Мода']);
    Tag::create(['title' => 'Офис']);
    Tag::create(['title' => 'Одежда']);
    Tag::create(['title' => 'Интерьер']);
    Tag::create(['title' => 'Хороший']);
    Tag::create(['title' => 'Стандарт']);
    Tag::create(['title' => 'Стулья']);
    Tag::create(['title' => 'Гостиная']);
  }
}
