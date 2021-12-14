<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('leads', function (Blueprint $table) {
      $table->id();
      $table->string('contact');
      $table->string('email')->nullable();
      $table->string('phone')->nullable();
      $table->string('description');
      $table->integer('score')->nullable(); // 1-5 or still unclassified if nulled
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
    Schema::dropIfExists('leads');
  }
}
