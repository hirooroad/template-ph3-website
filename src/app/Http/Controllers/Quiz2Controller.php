<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizees;
use App\Models\Question;
use App\Models\Choices;
use App\Models\User;

class Quiz2Controller extends Controller
{
    public function index()
    {
        $quizees = Quizees::where('id', 2)->get();
        $questions = Question::where('quiz_id', 2)->get();
        $choices = Choices::all();
        $users = User::all();
        return view('quizees2', compact('quizees', 'questions', 'choices','users'));
    }
}
