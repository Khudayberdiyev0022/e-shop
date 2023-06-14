<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorProduct extends Model
{
  use HasFactory;

  // Faker uchun bu model
  protected $table      = 'color_product';
  protected $fillable   = ['color_id', 'product_id'];
  public    $timestamps = false;
}
