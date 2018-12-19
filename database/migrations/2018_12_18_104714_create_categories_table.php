<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//----- table locations
use App\questions;

class CreateCategoriesTable extends Migration
{
    
    public function up()
    {
        // Schema::create('statuses', function (Blueprint $table) {
        //    $table->increments('id');
        //    $table->string('status', 75);
        //    $table->timestamp('submitted_timestamp')->useCurrent();
        //    $table->timestamp('approved_timestamps')->nullable();
        // });

        Schema::create('categories', function (Blueprint $table) {
           $table->increments('id');
           $table->string('category',50);
           $table->integer('status_id')->default(1);
           $table->integer('attempted')->default('0');
           $table->text('image_url',150);
           $table->timestamp('submitted_timestamp')->useCurrent();
           $table->timestamp('approved_timestamp')->nullable();
           
           // link up to statuses table
        //    $table->foreign("status_id")->references("id")->on("statuses")->onDelete("cascade");
           // Link to the category table
       });

    }

    
    public function down()
    {
        // Schema::drop('statuses');
        Schema::dropIfExists('categories');
    }
}
