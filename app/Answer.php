<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $guarded = [];

    public function author(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function question(){
        return $this->belongsTo('App\Question', 'question_id');
    }

    public function comment(){
        return $this->hasMany('App\Answer_comment');
    }
}
