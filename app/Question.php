<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;
    protected $fillable = ["question","right_answer","wrong_answer_1","wrong_answer_2","wrong_answer_3", "cat_id"];

    public function Category () {
        return $this->belongsTo(Category::class);
    }
}
