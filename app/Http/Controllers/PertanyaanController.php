<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Tag; 
use App\Question_tag;  
use Auth;
use DB;

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

        $tags_arr = explode(',', $request["tags"]);

        $tags_ids = [];
        foreach ($tags_arr as $tag_name) {
            $tag = Tag::firstOrCreate(['tag_name' => $tag_name]);
            $tag_ids[] = $tag->id;
        }
        //insert menggunakan model mass assignment
        $question = Question::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "user_id" => Auth::id()
        ]);
        $question->tags()->sync($tag_ids);

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
        
        // $question_tag = Question_tag::where('question_id',$pertanyaan_id);
        // dd($question_tag);
        // $id_tags=[];
        // foreach ($question_tag as $id_tag) {
        //     $tag = Tag::firstOrCreate(['id' => $id_tag]);
        //     $id_tags[] = $tag->id;
        // }
        // dd($id_tags);
        //mengupdate data tertentu menggunakan model mass update
        $update = Question::where("id", "$pertanyaan_id")->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);

        $update = Tag::where("id", "$pertanyaan_id")->update([
            "tag_name" => $request["tag_name"]
        ]);

       	return redirect('/pertanyaan')->with('success', 'Success Update Question!');
    }
    public function destroy($pertanyaan_id){
        // menghapus data tertentu menggunakan model
        $question = Question::find($pertanyaan_id);
        $question->delete();
       

        return redirect('/pertanyaan')->with('success', 'Delete Question Success!');
    }
}
