<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Question_comment;
use App\Answer;
use Auth;

class KomentarController extends Controller
{
    public function addComment($pertanyaan_id, Request $request){
        $question = Question::find($pertanyaan_id);
        $komentar = Question_comment::create([
            "isi" => $request["komentar"],
            "question_id" => $question->id,
            "user_id" => Auth::id()
        ]);
        $komentar = Question_comment::all()->where("question_id", $pertanyaan_id);
        $answer = Answer::all()->where('question_id', $pertanyaan_id);
    	return view('pertanyaan.show', compact('question', 'answer', 'komentar'));
    }
}