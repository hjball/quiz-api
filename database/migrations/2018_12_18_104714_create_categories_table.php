<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
           $table->increments('id');
           $table->string('category',50);
           $table->integer('status_id');
           $table->integer('attempted');
           $table->text('image_url',150);
           $table->timestamp('submitted_timestamp')->nullable();
           $table->timestamp('approved_timestamp')->nullable();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
