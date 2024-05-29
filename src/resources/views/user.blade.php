<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ユーザー一覧</h1>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
</body>
</html>