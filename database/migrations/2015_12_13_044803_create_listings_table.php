<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create the listings table
        Schema::create('listings', function (Blueprint $table) {
          $table->increments('id');

          $table->timestamps();

          $table->string('title');
          $table->string('owner');
          $table->string('city');
          $table->integer('price');
          $table->integer('available_month');
          $table->string('summary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('listings');
    }
}
