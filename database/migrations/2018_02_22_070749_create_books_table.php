<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id');
          $table->string('title');
          $table->integer('category_id')->unsigned();
          $table->integer('year_of_publication');
          $table->string('language');
          $table->string('file')->nullable();
          $table->string('pages');
          $table->text('description');
          $table->string('slug');
          $table->timestamps();

          $table->foreign('category_id')->references('id')->on('categories');
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
