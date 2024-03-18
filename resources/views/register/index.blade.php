<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chara-Books</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- CSSファイルの読み込み -->
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />

</head>
  <body>
    <header class="header bg_red">
      <div class="title">Chara-Books</div>
    </header>
    <main class="register bg_red">
      <div class="register_upper">
        <div class="mini_title">
          <p class="select_text">この本を読み聞かせますか？</p>
        </div>
        <div class="mini_title">
          <p id="selectedTitle" class="select_text">本のタイトル</p>
        </div>
      </div>
      <!-- 画像の呼び出し -->
      <div class="register_middle">
        <img id="selectedImage" src="" alt="Selected Book Image" />
      </div>
      <div class="register_lower">
        <div class="home_select_u">
          <div class="select_text bg_red">
            <a href="#">はい</a>
          </div>
          <div class="select_text bg_yellow">
            <a href="search.html">いいえ</a>
          </div>
        </div>
      </div>
    </main>
    <footer>&copy; 2024 My portfolio</footer>
    <!-- JavaScriptファイルの読み込み -->
    <script src="assets/js/register.js"></script>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"
    ></script>
  </body>
</html>
