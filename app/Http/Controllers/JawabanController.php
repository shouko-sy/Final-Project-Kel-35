<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use Auth;

class JawabanController extends Controller
{
    public function addAnswer($pertanyaan_id, Request $request){
        // dd($request);
        $jawaban = Answer::create([
            "isi" => $request["jawaban"],
            "question_id" => Auth::id(),
            "user_id" => Auth::id()
        ]);
   
        
        $question = Question::find($pertanyaan_id);
        return view('pertanyaan.show', compact('question', 'request'));
        // return redirect('/pertanyaan/{{$question->id}}')->with('success', 'Question Saved!');
        // return app('App\Http\Controllers\PertanyaanController')->show(1, $request['jawaban']);
    }
}
