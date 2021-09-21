<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/reset.css" />
  <link rel="stylesheet" href="./assets/base.css" />
  <link rel="stylesheet" href="./assets/var.css" />
  <link rel="stylesheet" href="./assets/style.css" />
  <title>Lesson</title>
</head>
<body>
  <div class="l-wrap">
    <header class="l-header">
      <h1 class='l-header__title'>
        <a href="/">PHP,curriculum - lesson04</a>
      </h1>
    </header>
    <main class="l-main">
      <ul class="p-list">
        <!-- 苗字と名前を出力 -->
        <li class="p-list__item">
          <p class="p-list__title">苗字と名前を出力</p>
          <div class="p-list__body">
          <?php 
          $lastName = "佐藤";
          $firstName = "拓磨";
          echo $lastName.$firstName;
          ?>
          </div>
        </li>
        <!-- 苗字と名前の間にPHPを入れて出力 -->
        <li class="p-list__item">
        <p class="p-list__title">苗字と名前の間にPHPを入れて出力</p>
          <div class="p-list__body">
          <?php 
          echo $lastName."PHP".$firstName;
          ?>
          </div>
        </li>
        <!-- 文字列を出力 -->
        <li class="p-list__item">
        <p class="p-list__title">文字列を出力</p>
          <div class="p-list__body">
          <?php 
          echo "こんにちは！ \" '今' 私は’PHP’を勉強しています”";
          ?>
          </div>
        </li>
      </ul>
    </main>
  </div>  
</body>
</html>