<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsCategoriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products_categories', function (Blueprint $table) {
      $table->id();
      $table->string('en_title');
      $table->string('ru_title');
      $table->string('mn_title');
      $table->bigInteger('view_rate')->default(0);
      $table->text('icon');
      $table->boolean('trashed')->default(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('products_categories');
  }
}
