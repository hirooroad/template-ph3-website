<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use PHPUnit\TextUI\Configuration\Php;

class QuizController extends Controller
{
    public function index($id)
    {
        $quiz = Quiz::with('questions.choices')->find($id);
        return view('quizees', compact('quiz'));
    }

    public function edit($post) {
        // 特定のクイズをIDを使用して取得
        // $quiz = Quiz::with('questions.choices')->where('id', $post)->first();
        $quiz = Question::findOrFail($post);

        // compact関数を使用してビューに変数を渡す
        return view('quizEdit', compact('quiz'));
    }

    public function update(Request $request, $id) {
        $quiz = Question::findOrFail($id);
        // $validated = $request->validate([
        //     'text' => 'required',
        //     'description' => 'required',
        //     'choice1' => 'required',
        //     'choice2' => 'required',
        //     'choice3' => 'required',
        //     'answer' => 'required',
        // ]);

            $quiz->update(['text' => $request['text']]);

        $request->session()->flash('message', 'クイズを更新しました');
        return redirect("quizzes/$quiz->quiz_id");
    }

    public function destroy($id) {
        $quiz = Question::findOrFail($id);
        $quiz->delete();
        session()->flash('message', 'クイズを削除しました');
        return redirect("quizzes/$quiz->quiz_id");
    }

    public function adminIndex() {
        $quiz = Question::withTrashed()->paginate(20);
        return view('admin.index', compact('quiz'));
    }

    public function adminEdit($post) {
        $quiz = Question::findOrFail($post);
        return view('admin.edit', compact('quiz'));
    }

    public function adminUpdate(Request $request, $id) {
        $quiz = Question::findOrFail($id);
        $quiz->update(['text' => $request['text']]);
        $request->session()->flash('message', 'クイズを更新しました');
        return redirect('admin/index');
    }

    public function adminCreate() {
        return view('admin.create');
    }

    public function adminStore(Request $request) {
        $validated = $request->validate([
            'text' => 'required|max:200',
        ]);

        $quiz = Question::create([
            'text' => $validated['text'],
            'quiz_id' => 2,
            'image' => 'sample.jpg'
        ]);

        if ($quiz) {
            $request->session()->flash('message', 'クイズを作成しました');
        } else {
            $request->session()->flash('message', 'クイズの作成に失敗しました');
        }
        return redirect()->back();
    }

    public function adminDestroy($id) {
        $quiz = Question::withTrashed()->findOrFail($id);
        $quiz->delete();
        session()->flash('message', 'クイズを削除しました');
        return redirect('admin/index');
    }

    public function adminChoices() {
        $choices = Choice::withTrashed()->paginate(20);
        return view('admin.choice', compact('choices'));
    }

    public function adminChoicesCreate() {
        $quiz = Quiz::all();
        return view('admin.choiceCreate', compact('quiz'));
    }

    public function adminChoicesStore(Request $request) {
        try {
        $validated = $request->validate([
            'quiz_id' => 'required',
            'question' => 'required|max:250',
            'image' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
            'choice1' => 'required|max:200',
            'choice2' => 'required|max:200',
            'choice3' => 'required|max:200',
            'correct' => 'required|in:1,2,3', // 'correct'フィールドが必須で、1, 2, 3のいずれかであることを確認
        ]);

        try {
            $imagePath = $validated['image']->store('img', 'public'); // 'public/img' ではなく 'img' と指定
            $imageName = basename($imagePath);
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }

        // if(request('image')) {
        //     try {
        //         $originalName = request()->file('image')->getClientOriginalName();
        //         $imageName = date('YmdHis') . $originalName;
        //         $imagePath = request()->file('image')->storeAs('images', $imageName);
        //     } catch (\Exception $e) {
        //         echo 'Error: ' . $e->getMessage();
        //     }
        // } else {
        //     $imageName = null;
        // }

        $question = Question::create([
            'text' => $validated['question'],
            'quiz_id' => $validated['quiz_id'],
            'image' => $imageName,
        ]);

        if ($question) {
            for($i = 1; $i <= 3; $i++) {
            $is_answer = $validated['correct'] == $i ? 1 : 0;
            try {
                $choice = Choice::create([
                    'text' => $validated["choice{$i}"],
                    'question_id' => $question->id,
                    'is_correct' => $is_answer,
                ]);
            } catch (\Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }
            }
            if ($choice) {
                    request()->session()->flash('message', '選択肢を作成しました');
                    return redirect()->route('admin_index');
                } else {
                    request()->session()->flash('message', '選択肢の作成に失敗しました');
                    return redirect()->route('admin_index');
                }
        } else {
            request()->session()->flash('message', '質問の作成に失敗しました');
            return redirect()->back();
        }

    } catch (ValidationException $e) {
        // バリデーションエラーをログに記録
        Log::error('バリデーションエラー: ', $e->errors());

        // エラーメッセージをユーザーに表示
        return redirect()->back()->withErrors($e->errors())->withInput();
    } catch (\Exception $e) {
        // その他のエラーをログに記録
        Log::error('エラー: ' . $e->getMessage());

        // エラーメッセージをユーザーに表示
        return redirect()->back()->with('error', '質問の作成に失敗しました。');
    }
        }
}