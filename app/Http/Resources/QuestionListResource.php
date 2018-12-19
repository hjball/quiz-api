<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionListResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            "category_id" => $this->id,
            "question" => $this->question,
            "right_answer" => $this->right_answer,
            "wrong_answer_1" => $this->wrong_answer_1,
            "wrong_answer_2" => $this->wrong_answer_2,
            "wrong_answer_3" => $this->wrong_answer_3
            ];
    }
}
