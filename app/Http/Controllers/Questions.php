<?php

namespace App\Http\Controllers;

use App\Question;
use App\Category;
use App\Http\Resources\QuestionListResource;
use App\Http\Requests\QuestionRequest;


use Illuminate\Http\Request;

class Questions extends Controller
{
    
    public function index()
    {
        return QuestionListResource::collection(Question::all());

    }

   
    public function store(QuestionRequest $request, Category $category)
    {
            //  $data = $request->only(["question", "right_answer", "wrong_answer_1", "wrong_answer_2", "wrong_answer_3", "cat_id" ]);

            //  $question = Question::create($data);
     
            //  return new QuestionListResource($question);
            
            $question = new Question($request->only(["question", "right_answer", "wrong_answer_1", "wrong_answer_2", "wrong_answer_3"]));

            $category->questions()->save($question);
            return new QuestionListResource($question);

           

    }

  
    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
