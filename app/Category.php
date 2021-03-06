<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public $timestamps = false;
    protected $fillable = ["category", "image_url"];

    // return $this->belongsTo(Statuses::class);
    public function questions (){
        return $this->hasMany(Question::class);
    }
}

