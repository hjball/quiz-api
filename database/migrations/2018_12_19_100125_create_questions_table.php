<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
   
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
           $table->increments('id');
           $table->string('status_id')->default(1);
           $table->string('question', 250);
           $table->string('right_answer',100);
           $table->string('wrong_answer_1',100);
           $table->string('wrong_answer_2',100);
           $table->string('wrong_answer_3',100);
           $table->integer('attempted')->default(0);
           $table->unsignedInteger('category_id')->default(0);
           $table->integer('attempted_right')->default(0);
           $table->integer('attempted_wrong')->default(0);
           $table->timestamp('submitted_by_timestamp')->useCurrent();
           $table->timestamp('approved_timestamp')->nullable();


           $table->foreign('category_id')
                    ->references('id')->on('categories')
                    ->onDelete('cascade');


       });
        
    }

    
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
