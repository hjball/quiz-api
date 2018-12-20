<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizActive extends Model
{
	public $timestamps = false;
    protected $fillable = ["cat_id", "quest_id", "right_answer", "no_of_questions", "no_of_seconds"];



    public function getQuestions($cat_id){

        // $output = `getQuestions for - ${cat_id}`;
    
      return {`getQuestions for - ${cat_id}`};
    }

}

