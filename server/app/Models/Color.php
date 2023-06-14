<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
  use HasFactory;

  protected $table    = 'colors';
  protected $fillable = ['title', 'hex_code'];

  public function product()
  {
    return $this->belongsToMany(Product::class, 'color_product');
  }
}
