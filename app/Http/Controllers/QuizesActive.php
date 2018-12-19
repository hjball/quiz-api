<?php

namespace App\Http\Controllers;

use App\QuizActive;
use Illuminate\Http\Request;

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
     // Get the Category ID the quiz rquested for
        $cat_id = $request->only(["cat_id"]);

        //Get all the questions for the Cat_ID
        $questions = DB::table('categories')
            ->join('questions', 'categories.id', '=', 'questions.cat_id')
            ->select('categories.category', 'questions.*')
            ->where('categories.id', $cat_id)
            ->orderByRaw('questions.attempted ASC')
            ->get();



        // //Get all the questions for the Cat_ID
        // $secs_per_question = DB::table('config')
        //     ->where('item', 'seconds_per_question')
        //     ->get();

        // $questions_per_quiz = DB::table('config')
        //     ->where('item', 'questions_per_quiz')
        //     ->get();  

        $secs_per_question = 10;
        $questions_per_quiz = 3;          

    //output= {
        // 'quiz_id': "",
        // 'cat_id' : "",
        // 'category' : "",
        // 'no_of_questions' : "",
        // 'seconds_per_question' : "",

        // 'questions [
        //     'question' : "",
        //     'answer1' : "",
        //     'answer2' : "",
        //     'answer3' : "",
        //     'answer4' : "",
        // ]
        //}

        $quiz_id = time(now).(rand(0, getrandmax() ) );  
        $idx = 0;

        //Build Output  
        $output['quiz_id']              = $quiz_id;
        $output['cat_id']               = $questions.cat_id;
        $output['category']             = $questions.category;
        $output['no_of_questions']      = $questions_per_quiz;
        $output['seconds_per_question'] = $secs_per_question;

        foreach ($questions as $question) {
            
            //Generate a random no between 1 - 4 to determine where the right
            //answer is placed.
            $rand_answer = floor(rand(1,4));
            $output['questions'] = [];
            
                        $output['questions'][] = [['quest_id'] = $question.id,
                                                ['question'] = $question.question,
                                                ['answer1'] = $question.wrong_answer_1,
                                                ['answer2'] = $question.right_answer,
                                                ['answer3'] = $question.wrong_answer_2,
                                                ['answer4'] = $question.wrong_answer_3
                                                ];
                    // $idx += 1;

                    DB::table('quizesactive')->insert(
                        [ 'quiz_id'  => $output.quiz_id,
                          'cat_id'   => $question.cat_id,
                          'quest_id' => $question.id,
                          'right_answer' => 2,
                        ]
                    );

                    //returns the db id of the uiz record inserted
                    // $id = DB::table('quizesactive')->insertGetId(
                    //     [ 'quiz_id'  => $output.quiz_id,
                    //       'cat_id'   => $question.cat_id,
                    //       'quest_id' => $question.id,
                    //       'right_answer' => 2,
                    //     ]
                    // );


            // switch ($rand_answer) {
            //     case 1:
            //         $output['questions'][$idx] =['quest_id'] = $question.id;
            //                                     ['question'] =$question.question;
            //                                     ['answer1'] = $question.right_answer;
            //                                     ['answer2'] = $question.wrong_answer_1;
            //                                     ['answer3'] = $question.wrong_answer_2;
            //                                     ['answer4'] = $question.wrong_answer_3;
                                   

            //         $idx += 1;

            //         DB::table('quizesactive')->insert(
            //             [ 'quiz_id'  => $output.quiz_id,
            //               'cat_id'  => $question.cat_id,
            //               'quest_id' => $question.id,
            //               'right_answer' => 1,
            //             ]
            //         );
            //         break;

            //     case 2:
            //              $output['questions'][$idx] = ['quest_id' = $question.id,
            //                                     'question' =$question.question,
            //                                     'answer1' = $question.wrong_answer_1,
            //                                     'answer2' = $question.right_answer;
            //                                     'answer3' = $question.wrong_answer_2;
            //                                     'answer4' = $question.wrong_answer_3;

            //         $idx += 1;

            //         DB::table('quizesactive')->insert(
            //             [ 'quiz_id'  => $output.quiz_id,
            //               'cat_id'   => $question.cat_id,
            //               'quest_id' => $question.id,
            //               'right_answer' => 2,
            //             ]
            //         );
            //         break;

            //     case 3:
            //         $output.questions[$idx] = [ 'quest_id': $question.id,
            //                                     'question': $question.question,
            //                                     'answer1': $question.wrong_answer_2,
            //                                     'answer2': $question.wrong_answer_1,
            //                                     'answer3': $question.right_answer,
            //                                     'answer4': $question.wrong_answer_3,
            //                      ]  

            //         $idx += 1;

            //         DB::table('quizesactive')->insert(
            //             [ 'quiz_id' => $output.quiz_id,
            //               'cat_id' => $question.cat_id,
            //               'quest_id' => $question.id,
            //               'right_answer' => 3,
            //             ]
            //         );
            //         break; 

            //     case 4:
            //         $output.questions[$idx] = [ 'quest_id': $question.id,
            //                                     'question': $question.question,
            //                                     'answer1': $question.wrong_answer_3,
            //                                     'answer2': $question.wrong_answer_1,
            //                                     'answer3': $question.wrong_answer_2,
            //                                     'answer4': $question.right_answer,
            //                      ]  

            //         $idx += 1;

            //         DB::table('quizesactive')->insert(
            //             [ 'quiz_id'  => $output.quiz_id,
            //               'cat_id'   => $question.cat_id,
            //               'quest_id' => $question.id,
            //               'right_answer' => 4,
            //             ]
            //         );
            //         break;                                   
                
            //     default:
            //         $output.questions[$idx] = [ 'quest_id': $question.id,
            //                                     'question': $question.question,
            //                                     'answer1': $question.right_answer,
            //                                     'answer2': $question.wrong_answer_1,
            //                                     'answer3': $question.wrong_answer_2,
            //                                     'answer4': $question.wrong_answer_3,
            //                      ]  

            //         $idx += 1;

            //         DB::table('quizesactive')->insert(
            //             [ 'quiz_id'  => $output.quiz_id,
            //               'cat_id'   => $question.cat_id,
            //               'quest_id' => $question.id,
            //               'right_answer' => 1,
            //             ]
            //         );
            //         break;
            // }

        } //forEach


        // return the article along with a 201 status code
        return response($output, 201);
    
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
