<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $guarded = [];

    public function profil(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
