<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('images', function (Blueprint $table) {
          $table->increments('id');

          $table->timestamps();

          $table->string('path');
          $table->integer('project_id');
          $table->string('uniqid');
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
        Schema::drop('images');
    }
}
