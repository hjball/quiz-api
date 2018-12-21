<?php

namespace App\Http\Controllers;

use App\QuizActive;
use Illuminate\Http\Request;
use App\Category;
use App\Questions;

class QuizActives extends Controller
{
    private $quiz_id;

    public function index(Request $request)
    {
        $category = Category::find($request->cat_id);

        $questions = $category->Questions->random(2);

        return $questions;
    }
  
    public function store(Request $request)
    {
        $category = Category::find($request->cat_id);

        $questions = $category->Questions->random(2);

        $this->quiz_id = rand(0, getrandmax());
        // return($questions);

        $reduced_questions = $questions->reduce(function ($array, $question){
            
      
            // $quiz_id = $question->get('quiz_id');

            $random = collect([1,2,3,4]);
            $ran_answer = $random->random();
            
            $question =  QuizActive::create(
               [
                   //"key" => "value",
                   'quiz_id' => $this->quiz_id,
                   'category_id' => $question['category_id'],
                   'question_id' => $question['id'],
                   'question' => $question['question'],
                   'right_answer' => $ran_answer,
                   'no_of_questions' => 2,
                   'no_of_seconds' => 10
               ]
           );

        $array[] = $question;

        return $array;
           
       });



        // return $reduced_questions;

        
        
    

       //Build Output
  
       $output['no_of_questions']      = 2;
       $output['seconds_per_question'] = 10;
       $output['category']             = $category['category'];
       $output['category_id']          = $category['id'];
       $output['quiz_id']              = $this->quiz_id;
       
       $array = [];

       foreach ($reduced_questions as $i => $rquestion) {
       
           //Generate a random no between 1 - 4 to determine where the right
           //answer is placed.
        //    $rand_answer = floor(rand(1,4));
         

           //Build the question array row
        //    $array= ['quest_id' => $rquestion['id'],
        //             'question' => $rquestion['question'],
        //             'answer1'  => $rquestion['wrong_answer_1'],
        //             'answer2'  => $rquestion['right_answer'],
        //             'answer3'  => $rquestion['wrong_answer_2'],
        //             'answer4'  => $rquestion['wrong_answer_3']
        //            ];
            switch ($rquestion['right_answer']){
                case 1:
                $array [] = ['quest_id' => $rquestion['id'],
                            'question' => $questions[$i]['question'],
                            'answer1'  => $questions[$i]['right_answer'],
                            'answer2'  => $questions[$i]['wrong_answer_3'],
                            'answer3'  => $questions[$i]['wrong_answer_2'],
                            'answer4'  => $questions[$i]['wrong_answer_1']
                        ];       
                    break;
                case 2:
                    $array [] = ['quest_id' => $rquestion['id'],
                                'question' => $questions[$i]['question'],
                                'answer1'  => $questions[$i]['wrong_answer_1'],
                                'answer2'  => $questions[$i]['right_answer'],
                                'answer3'  => $questions[$i]['wrong_answer_2'],
                                'answer4'  => $questions[$i]['wrong_answer_3']
                            ];
                            break;
                case 3:
                $array [] = ['quest_id' => $rquestion['id'],
                            'question' => $questions[$i]['question'],
                            'answer1'  => $questions[$i]['wrong_answer_1'],
                            'answer2'  => $questions[$i]['wrong_answer_2'],
                            'answer3'  => $questions[$i]['right_answer'],
                            'answer4'  => $questions[$i]['wrong_answer_3']
                        ];
                        break;
                case 4:
                $array [] = ['quest_id' => $rquestion['id'],
                            'question' => $questions[$i]['question'],
                            'answer1'  => $questions[$i]['wrong_answer_1'],
                            'answer2'  => $questions[$i]['wrong_answer_3'],
                            'answer3'  => $questions[$i]['wrong_answer_2'],
                            'answer4'  => $questions[$i]['right_answer']
                        ];     
                        break;  
                default:
                $array [] = ['quest_id' => $rquestion['id'],
                            'question' => $questions[$i]['question'],
                            'answer1'  => $questions[$i]['right_answer'],
                            'answer2'  => $questions[$i]['wrong_answer_3'],
                            'answer3'  => $questions[$i]['wrong_answer_2'],
                            'answer4'  => $questions[$i]['wrong_answer_1']
                        ];       
            }
            // return ($questions['quest_id']);
        }
         $output['questions'] = [$array];
                return $output;
                   
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
