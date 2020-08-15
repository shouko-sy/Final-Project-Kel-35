<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer_comment extends Model
{
    protected $guarded = [];
    protected $table = "answers_comments";

    public function question(){
    	return $this->belongsTo('App\Answers', 'answer_id');
    }
}
