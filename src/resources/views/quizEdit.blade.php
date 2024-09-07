<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ITクイズ | POSSE 初めてのWeb制作</title>
  <!-- スタイルシート読み込み -->
  <link rel="stylesheet" href="../css/posseQuiz.css">
  <!-- Google Fonts読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <script src="{{ asset('js/common.js') }}" defer></script>
  <script src="{{ asset('js/quiz.js') }}" defer></script>
  <script src="{{ asset('js/quiz2.js') }}" defer></script>
  <script src="{{ asset('js/quiz3.js') }}" defer></script>
</head>
<body>
    <header id="js-header" class="l-header p-header">
    <div class="p-header__logo"><img src="../img/logo.svg" alt="POSSE"></div>
    <button class="p-header__button" id="js-headerButton"></button>
    <div class="p-header__inner">
      <div class="p-header__official">
        <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer" class="p-header__official__link--line">
          <i class="u-icon__line"></i>
          <span class="">POSSE公式LINEを追加</span>
          <i class="u-icon__link"></i>
        </a>
        <a href="" class="p-header__official__link--website">POSSE 公式サイト<i class="u-icon__link"></i></a>
      </div>
      <ul class="p-header__sns p-sns">
        <li class="p_sns__item">
        </li>
        <li class="p-sns__item">
          <a href="https://twitter.com/posse_program" target="_blank" rel="noopener noreferrer" class="p-sns__item__link"
            aria-label="Twitter">
            <i class="u-icon__twitter"></i>
          </a>
        </li>
        <li class="p-sns__item">
          <a href="https://www.instagram.com/posse_programming/" target="_blank" rel="noopener noreferrer"
            class="p-sns__item__link" aria-label="instagram">
            <i class="u-icon__instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </header>
    <main>
        <section class="p-hero p-quiz-hero">
            <div class="l-container">
                <h1 class="p-hero__title">
                    <span class="p-hero__title__label">POSSE課題</span>
                </h1>
            </div>
        </section>
        <section class="p-quiz">
            <div class="l-container">
                <form method="post"  action="{{ route('quiz_update', $quiz) }}">
                    @csrf
                    @method('PATCH')
                    <div class="p-quiz__form">
                        <div class="p-quiz__form__item">
                            <label for="text" class="p-quiz__form__label">問題名</label>
                            <input type="text" name="text" id="name" class="p-quiz__form__input" value="{{$quiz->text}}">
                        </div>
                        <div class="p-quiz__form__item">
                            <button type="submit" class="p-quiz__form__button">更新</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
</body>