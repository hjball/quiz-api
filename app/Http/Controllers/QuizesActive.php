<?php

namespace App\Http\Controllers;

use App\QuizActive;
use Illuminate\Http\Request;
use App\Category;
use App\Questions;

class QuizActives extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::find($request->cat_id);

        $questions = $category->Questions->random(2);

        
      

        $questions->each(function ($question){
            

           
            $random = collect([1,2,3,4]);
            $ran_answer = $random->random();
            
           QuizActive::create(
               [
                   //"key" => "value",
                   'quiz_id' => 10,
                   'category_id' => $question['category_id'],
                   'question_id' => $question['id'],
                   'question' => $question['question'],
                   'right_answer'  => $ran_answer,
                   'no_of_questions' => 2,
                   'no_of_seconds' => 10
               ]
           );
           
       });

        return ($questions);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
