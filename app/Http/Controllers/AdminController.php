<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('admin.index');
    }

    function manageQuestions(){
        $questions=Questions::all();
        return view('admin.manage_questions', ['questions'=>$questions]);
    }

    function unansweredQuestions(){
        return view('admin.unanswered_questions');
    }

    function reviewMessages(){
        return view('admin.review_messages');
    }
}
