<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('kind');
          $table->string('info')->nullable();
          $table->string('state');
          $table->integer('price')->nullable();
          $table->string('action');
          $table->string('author')->nullable();
          $table->binary('image');
          $table->unsignedbigInteger('user_id');
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
        Schema::dropIfExists('books');
    }
}
