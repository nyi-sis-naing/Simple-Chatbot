<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuestController extends Controller
{
    function addQuestion(){
        return view('admin.add_question');
    }

    function postAddQuestion(){
        $validation=request()->validate([
            'question'=>'required',
            'answer'=>'required'
        ]);
        
        if($validation){
            $question=new Questions();
            $question->question=request('question');
            $question->answer=request('answer');
            $question->category=request('category');
            $question->save();
            return redirect()->route('admin.manage_questions');
        }else{
            return back()->withErrors($validation);
        }
    }

    function editQuestion($id){
        $edit_question=Questions::find($id);
        return view('admin.edit_questions', ['edit_question'=>$edit_question]);
    }

    function postEditQuestion($id){
        $validation=request()->validate([
            'question'=>'required',
            'answer'=>'required'
        ]);
        if($validation){
            $update_question=Questions::find($id);
            $update_question->question=request('question');
            $update_question->answer=request('answer');
            $update_question->category=request('category');
            $update_question->save();
            return back();
        }else{
            return back()->withErrors($validation);
        }
    }

    function showPhpQuestions(){
        $php_questions=Questions::where('category', 'PHP')->get();
        // return back()->with('php_questions', $php_questions);
        return $php_questions;
    }
}
