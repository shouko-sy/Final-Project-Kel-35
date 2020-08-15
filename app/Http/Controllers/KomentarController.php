<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Question_comment;
use Auth;

class KomentarController extends Controller
{
    public function addComment($pertanyaan_id, Request $request){
        $komentar = Question_comment::create([
            "isi" => $request["komentar"],
            "question_id" => Auth::id(),
            "user_id" => Auth::id()
        ]);
        $question = Question::find($pertanyaan_id);
        $komentar = Question_comment::all()->where("id", $pertanyaan_id);
        // dd($komentar);
    	return view('pertanyaan.show', compact('question', 'komentar'));
    }
}