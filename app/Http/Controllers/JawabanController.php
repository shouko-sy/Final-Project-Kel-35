<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\Question_comment;
use App\Answer_comment;
use Auth;

class JawabanController extends Controller
{
    public function addAnswer($pertanyaan_id, Request $request){
        // dd($request);
        $question = Question::find($pertanyaan_id);
        $answer = Answer::create([
            "isi" => $request["jawaban"],
            "question_id" => $question->id,
            "user_id" => Auth::id()
        ]);
        
        $answer = Answer::all()->where('question_id', $pertanyaan_id);
        $komentar = Question_comment::all()->where("question_id", $pertanyaan_id);
        $komentarjwb = Answer_comment::all()->where("question_id", $pertanyaan_id);
        // dd($answer);

        return view('pertanyaan.show', compact('question', 'answer', 'komentar', 'komentarjwb'));
        // return redirect('/pertanyaan/{{$question->id}}')->with('success', 'Question Saved!');
        // return app('App\Http\Controllers\PertanyaanController')->show($pertanyaan_id);
    }
}
