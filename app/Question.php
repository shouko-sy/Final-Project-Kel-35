<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $guarded = [];

    public function namaUser(){
    	return $this->belongsTo('App\User', 'user_id');
    }
    public function tags(){
    	return $this->belongsToMany('App\Tag', 'questions_tags', 'question_id', 'tag_id');
    }
    public function comment(){
        return $this->hasMany('App\Question_comment');
    }
}
