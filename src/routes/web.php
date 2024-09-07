<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\possetopController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizEditController;
use App\Http\Controllers\QuizUpdateController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('users', [UserController::class, 'user']) -> name('users');

Route::get('possetop', [possetopController::class, 'possetop']) -> name('possetop');

Route::get('quizzes/{id}', [QuizController::class, 'index']) -> name('quizzes1');

Route::get('quizzes/{post}/edit', [QuizController::class, 'edit']) -> name('quiz_edit');

Route::patch('quizzes/{post}', [QuizController::class, 'update']) -> name('quiz_update');

Route::delete('quizzes/{post}', [QuizController::class, 'destroy']) -> name('quiz_delete');

Route::get('admin/index', [QuizController::class, 'adminIndex']) -> name('admin_index')->middleware('admin');

Route::get('admin/index/{post}/edit', [QuizController::class, 'adminEdit']) -> name('admin_quiz_edit')->middleware('admin');

Route::patch('admin/index/{post}', [QuizController::class, 'adminUpdate']) -> name('admin_quiz_update')->middleware('admin');

Route::get('admin/index/create' , [QuizController::class, 'adminCreate']) -> name('admin_quiz_create')->middleware('admin');

Route::post('admin/index', [QuizController::class, 'adminStore']) -> name('admin_quiz_store')->middleware('admin');

Route::delete('admin/index/{post}', [QuizController::class, 'adminDestroy']) -> name('admin_quiz_delete')->middleware('admin');

Route::get('admin/choices' , [QuizController::class, 'adminChoices']) -> name('admin_choices')->middleware('admin');

Route::get('admin/choices/create', [QuizController::class, 'adminChoicesCreate']) -> name('admin_choices_create')->middleware('admin');

Route::post('admin/choices', [QuizController::class, 'adminChoicesStore']) -> name('admin_choices_store')->middleware('admin');

require __DIR__.'/auth.php';
