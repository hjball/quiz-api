<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public $timestamps = false;
    protected $fillable = ["category", "image_url"];

    // public function category()
    // {
    // 	return $this->belongsTo(Statuses::class);
    // }
}
