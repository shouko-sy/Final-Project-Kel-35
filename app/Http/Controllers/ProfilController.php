<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class ProfilController extends Controller
{
    public function profil(){
        $questions = Question::all();
        return view('profil.profil', compact('questions'));
    }
}
