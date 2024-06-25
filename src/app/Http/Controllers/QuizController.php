<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizees;
use App\Models\Question;
use App\Models\Choices;
use App\Models\User;


class QuizController extends Controller
{
    public function index()
    {
        $quizees = Quizees::where('id', 1)->get();
        $choices = Choices::all();
        $users = User::all();

        $questions = Question::with('choices')->where('quiz_id', 1)->get();

        return view('quizees', compact('quizees', 'questions','users'));
    }
}
