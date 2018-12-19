<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizActivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_actives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_id')->unassigned;
            $table->integer('category_id')->unassigned;
            $table->integer('question_id')->unassigned;
            $table->text('right_answer',1);
            $table->integer('no_of_questions')->unassinged;
            $table->integer('no_of_seconds')->unassigned;
            $table->timestamp('create_timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_actives');
    }
}
