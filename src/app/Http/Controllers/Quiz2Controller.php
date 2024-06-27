<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use App\Models\User;

class Quiz2Controller extends Controller
{
    public function index()
    {
        $quizees = Quiz::where('id', 2)->get();
        $questions = Question::where('quiz_id', 2)->get();
        $choices = Choice::all();
        $users = User::all();
        return view('quizees2', compact('quizees', 'questions', 'choices','users'));
    }
}
