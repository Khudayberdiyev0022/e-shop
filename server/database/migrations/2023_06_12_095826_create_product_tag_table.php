<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

  public function up()
  {
    Schema::create('product_tag', function (Blueprint $table) {
      $table->foreignId('product_id')->nullable()->constrained('products')->onDelete('cascade');
      $table->foreignId('tag_id')->nullable()->constrained('tags')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::dropIfExists('product_tag');
  }
};
