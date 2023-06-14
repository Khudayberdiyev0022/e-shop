<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

  public function up()
  {
    Schema::create('color_product', function (Blueprint $table) {
      $table->foreignId('color_id')->nullable()->constrained('colors')->onDelete('cascade');
      $table->foreignId('product_id')->nullable()->constrained('products')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::dropIfExists('color_product');
  }
};
