<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizEditController extends Controller
{
    public function edit($post)
    {
        return view('posts.edit', compact('post'));
    }
}