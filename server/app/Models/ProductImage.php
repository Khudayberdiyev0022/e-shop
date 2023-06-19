<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
  use HasFactory;

  protected $table    = 'product_images';
  protected $fillable = ['product_id', 'file_path'];

  public function getImageUrlAttribute()
  {
    if ($this->file_path) {
      return url($this->file_path);
    }
  }

  public function products()
  {
    return $this->belongsToMany(Product::class, 'product_images');
  }
}
