<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POSSE 管理画面ダッシュボード</title>
  <!-- スタイルシート読み込み -->
  <link rel="stylesheet" href="../assets/styles/common.css">
  <link rel="stylesheet" href="{{ asset('/css/admin.css')}}">
  <!-- Google Fonts読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <x-admin-header />
  <div class="wrapper">
    <x-admin-sidebar />
      <main>
          <div class="container">
            <h1 class="mb-4">設問作成</h1>
            @if (session('message'))
          <div class="p-quiz-edit-message">
          {{ session('message') }}
          </div>
        @endif
            <form class="question-form" method="POST" action="{{ route('admin_choices_store') }}" enctype="multipart/form-data">
            @csrf
              <div class="mb-4">
                <label for="quiz-id" class="form-label">クイズ</label>
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
                <x-input-error :messages="$errors->get('text')"></x-input-error>
                @foreach($quiz as $quiz)
                  <div class="form-check form-switch">
                    <input type="radio" name="quiz_id" id="quiz{{ $quiz->id }}" class="form-radio-button" value="{{ $quiz->id }}" {{ old('quiz_id') == $quiz->id ? 'checked' : '' }}>
                    <label for="quiz{{ $quiz->id }}" class="form-radio-label">{{ $quiz->name }}</label>
                  </div>
                @endforeach
              </div>
              <div class="mb-4">
                <label for="quesiton" class="form-label">設問</label>
                <x-input-error :messages="$errors->get('text')"></x-input-error>
                <input type="text" name="question" id="question" class="form-control required" placeholder="問題文を入力してください" value="{{old('question')}}" />
              </div>
              <div class="mb-4">
                <label for="image" class="form-label">画像ファイル</label>
                <x-input-error :messages="$errors->get('image')"></x-input-error>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
              </div>
              <div class="mb-4">
                <label for="choice1" class="form-label">選択肢①</label>
                <x-input-error :messages="$errors->get('text')"></x-input-error>
                <input type="text" name="choice1" id="choice1" class="form-control required" placeholder="設問文を入力してください" value="{{old('choice1')}}" />
              </div>
              <div class="mb-4">
                <label for="choice2" class="form-label">選択肢②</label>
                <x-input-error :messages="$errors->get('text')"></x-input-error>
                <input type="text" name="choice2" id="choice2" class="form-control required" placeholder="設問文を入力してください" value="{{old('choice2')}}" />
              </div>
              <div class="mb-4">
                <label for="choice3" class="form-label">選択肢③</label>
                <x-input-error :messages="$errors->get('text')"></x-input-error>
                <input type="text" name="choice3" id="choice3" class="form-control required" placeholder="設問文を入力してください" value="{{old('choice3')}}" />
              </div>
                  <label for="correct_id" class="form-label">正解番号</label>
                  <x-input-error :messages="$errors->get('toggle')"></x-input-error>
                    <div class="form-check form-switch">
                    <input type="radio" name="correct" id="correct1" class="form-radio-button" value="1" {{ old('correct') == "1" ? 'checked' : '' }}>
                    <label for="toggle1" class="form-radio-label">1</label>

                    <input type="radio" name="correct" id="correct2" class="form-radio-button" value="2" {{ old('correct') == "2" ? 'checked' : '' }}>
                    <label for="toggle2" class="form-radio-label">2</label>

                    <input type="radio" name="correct" id="correct3" class="form-radio-button" value="3" {{ old('correct') == "3" ? 'checked' : '' }}>
                    <label for="toggle3" class="form-radio-label">3</label>
                    </div>
              <button type="submit" class="btn submit">追加</button>
            </form>
          </div>
      </main>
    </main>
  </div>
</body>