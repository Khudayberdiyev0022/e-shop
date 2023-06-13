<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->id();
//      $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
      $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('cascade');
      $table->string('title');
      $table->string('slug')->unique();
      $table->string('description');
      $table->text('content');
      $table->string('preview_image')->nullable();
      $table->string('price');
      $table->integer('quantity');
      $table->unsignedBigInteger('views')->default(0);
      $table->boolean('is_published')->default(0);
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('products');
  }
};
