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
          $table->string('address_street');
          $table->string('address_city');
          $table->string('address_state');
          $table->string('address_zip');
          $table->integer('price');
          $table->date('available_date');
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
