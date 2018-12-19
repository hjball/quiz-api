<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "question" => ["required", "string", "min: 2", "max:100"],
            "right_answer" => ["required", "string", "min: 1", "max: 50"],
            "wrong_answer_1" => ["required", "string", "min: 1", "max: 50" ],
            "wrong_answer_2" => ["required", "string", "min: 1", "max: 50"],
            "wrong_answer_3" => ["required", "string", "min: 1", "max: 50"],
        ];
    }
}
