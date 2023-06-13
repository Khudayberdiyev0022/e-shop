<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $table    = 'products';
  protected $fillable = ['category_id', 'title', 'slug', 'description', 'content', 'preview_image', 'price', 'quantity', 'views', 'is_published'];

  public function tags()
  {
    return $this->belongsToMany(Tag::class, 'product_tag');
  }

  public function colors()
  {
    return $this->belongsToMany(Color::class, 'color_product');
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function getImageUrlAttribute()
  {
    if ($this->preview_image) {
      return url($this->preview_image);
    }
  }
}
