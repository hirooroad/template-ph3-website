<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POSSE 管理画面ダッシュボード</title>
  <!-- スタイルシート読み込み -->
  <link rel="stylesheet" href="./assets/styles/common.css">
  <!-- Google Fonts読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('/css/admin.css')}}">
  <script src="../assets/scripts/common.js" defer></script>
</head>

<body>
  <x-admin-header />
  <div class="wrapper">
    <x-admin-sidebar />
    <main>
      <div class="container">
        <h1 class="mb-4">設問一覧</h1>
        @if (session('message'))
          <div class="p-quiz-edit-message">
          {{ session('message') }}
          </div>
        @endif
        <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>問題</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($choices as $choice)
              <tr>
                <td>{{$choice->id}}</td>
                <td>{{$choice->text}}</td>
                </a>
                <td>
                  @if($choice->deleted_at)
                    <td>削除済み</td>
                  @else
                    <td>
                      <form method="POST" action="{{ route('admin_quiz_delete', $choice->id) }}" onclick="return confirm('本当にこのクイズを削除してもいいですか？')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">削除</button>
                      </form>
                    </td>
                  @endif
              </tr>
              @endforeach
              <div>
                {{ $choices->links() }}
              </div>
            </tbody>
        </table>
      </div>
    </main>
  </div>
</body>

</html>