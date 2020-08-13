<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Auth;

class PertanyaanController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['create', 'store', 'edit', 'update', 'delete']);
    }
    public function create(){
    	return view('pertanyaan.create');
    }
    public function store(Request $request){
    	$request->validate([
    		"judul" => 'required|unique:questions',
    		"isi" => 'required'
    	]);

        //insert menggunakan model mass assignment
        $question = Question::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "user_id" => Auth::id()
        ]);

    	return redirect('/pertanyaan')->with('success', 'Question Saved!');
    }
    public function index(){
        //menampilkan semua data menggunakan model
        $questions = Question::all();
    	return view('pertanyaan.index', compact('questions'));
    }
    public function show($pertanyaan_id){
        $question = Question::find($pertanyaan_id);
    	return view('pertanyaan.show', compact('question'));
    }
    public function edit($pertanyaan_id){
        //mengedit data tertentu menggunakan model
        $question = Question::find($pertanyaan_id);
    	return view('pertanyaan.edit', compact('question'));
    }
    public function update($pertanyaan_id, Request $request){
    	$request->validate([
    		"judul" => 'required|unique:questions',
    		"isi" => 'required'
    	]);

        //mengupdate data tertentu menggunakan model mass update
        $update = Question::where("id", "$pertanyaan_id")->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]); 

       	return redirect('/pertanyaan')->with('success', 'Success Update Question!');
    }
    public function destroy($pertanyaan_id){
        //menghapus data tertentu menggunakan model
        Question::destroy($pertanyaan_id);

    	return redirect('/pertanyaan')->with('success', 'Delete Question Success!');
    }
}
