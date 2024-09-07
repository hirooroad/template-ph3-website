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
            <h1 class="mb-4">問題作成</h1>
            @if (session('message'))
          <div class="p-quiz-edit-message">
          {{ session('message') }}
          </div>
        @endif
            <form class="question-form" method="POST" action="{{ route('admin_quiz_store') }}" enctype="multipart/form-data">
            @csrf
              <div class="mb-4">
                <label for="question" class="form-label">問題文:</label>
                <x-input-error :messages="$errors->get('text')"></x-input-error>
                <input type="text" name="text" id="question" class="form-control required" placeholder="問題文を入力してください" value="{{old('text')}}" />
              </div>
              <button type="submit" class="btn submit">更新</button>
            </form>
          </div>
      </main>
    </main>
  </div>
  {{-- <script>
    const submitButton = document.querySelector('.btn.submit')
    const inputDoms = Array.from(document.querySelectorAll('.required'))
    inputDoms.forEach(inputDom => {
      inputDom.addEventListener('input', event => {
        const isFilled = inputDoms.filter(d => d.value).length === inputDoms.length
        submitButton.disabled = !isFilled
      })
    })
  </script> --}}
</body>