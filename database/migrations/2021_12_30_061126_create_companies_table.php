<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('companies', function (Blueprint $table) {
      $table->id();
      $table->string('quantity');
      $table->string('en_title');
      $table->string('ru_title');
      $table->string('mn_title');
      $table->text('en_text');
      $table->text('ru_text');
      $table->text('mn_text');
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
    Schema::dropIfExists('companies');
  }
}
