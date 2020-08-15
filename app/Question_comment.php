<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_comment extends Model
{
	protected $guarded = [];
    protected $table = "questions_comments";

    public function question(){
    	return $this->belongsTo('App\Question', 'question_id');
    }
}
