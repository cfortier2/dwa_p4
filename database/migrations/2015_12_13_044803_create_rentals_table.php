<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create the rentals table
        Schema::create('rentals', function (Blueprint $table) {
          $table->increments('id');

          $table->timestamps();

          $table->string('title');
          $table->string('owner');
          $table->string('city');
          $table->integer('price');
          $table->integer('available_month');
          $table->string('summary');
          $table->string('type');
          $table->string('image');
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
        Schema::drop('rentals');
    }
}
