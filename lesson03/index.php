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
      <?php 
      echo "<h1 class='l-header__title'>PHP,curriculum - lesson03</h1>";
      ?>
    </header>
    <main class="l-main">
      <ul class="p-list">
        <li class="p-list__item">
          <p class="p-list__title">変数上書き</p>
          <div class="p-list__body">
          <?php 
          $num = 100;
          echo $num. "<br>";
          $num = 200;
          echo $num;
          ?>
          </div>
        </li>
        <li class="p-list__item">
        <p class="p-list__title">変数に変数を代入</p>
          <div class="p-list__body">
          <?php 
          $num2 = 300000;
          $num = $num2;
          echo $num;
          ?>
          </div>
        </li>
        <li class="p-list__item">
        <p class="p-list__title">インクリメント/デクリメント</p>
          <div class="p-list__body">
          <?php 
          echo ++$num. "<br>";
          echo $num++. "<br>";
          echo $num. "<br>";
          echo --$num. "<br>";
          echo $num--. "<br>";
          echo $num. "<br>";
          ?>
          </div>
        </li>
      </ul>
    </main>
  </div>  
</body>
</html>