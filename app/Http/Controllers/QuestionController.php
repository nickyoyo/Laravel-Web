<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\question_reports;

class QuestionController extends Controller
{
   
    public function Upload(){

        question_reports::create([
            'topic' => request('topic'),
            'users_level' => request('users_level'),
            'type' => request('type'),
            'status' => 1,
            'description' => request('description'),
        ]); 
 
         return redirect('/')->with('mssg' , 'Thanks for record.');
      }
    
    public function create(){
        return view('Question.createQ');
    }
    public function Question(){
        $doc = DB::table('question_reports')->orderBy('type','desc')->get();
        return view('Question.Question',['test' => $doc, 'Qtype' => 'A']);
    }
    public function deletedata($id){
        $doc = question_reports::findorFail($id);
        $doc -> delete();
        return redirect('Question');
    }
    public function search(){
        $n = request('Qtype');
        $doc = DB::table('question_reports')->where('type','LIKE','%'.$n.'%')->get();
        return view('Question.Question',['test' => $doc , 'Qtype' => $n]);
    }
}