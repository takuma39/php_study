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
        <a href="/">PHP,curriculum - lesson05</a>
      </h1>
    </header>
    <main class="l-main">
      <ul class="p-list">
        <!-- 1〜10まで数値をランダムで生成し偶数か奇数かを判定 -->
        <li class="p-list__item">
          <p class="p-list__title">1〜10まで数値をランダムで生成し偶数か奇数かを判定</p>
          <div class="p-list__body">
          <?php 
          $randomNumber = rand(1,10);
          if($randomNumber % 2 === 0) {
            echo $randomNumber.':偶数';
          } else {
            echo $randomNumber.':奇数';
          }
          ?>
          </div>
        </li>
        <!-- テストの点数をランダムで生成し点数に応じて成績を表示 -->
        <li class="p-list__item">
        <p class="p-list__title">テストの点数をランダムで生成し点数に応じて成績を表示</p>
          <div class="p-list__body">
          <?php 
          // ランダムで点数を決定
          $score = rand(0,100);

          // 評価確定
          if ($score == 100) {
            $result = '満点';
          } else if ($score >= 80){
            $result = '優';
          } else if ($score >= 70){
            $result = '良';
          } else if ($score >= 50){
            $result = '可';
          } else if ($score >= 0){
            $result = '不可';
          }

          echo '点数：'. $score. '<br>'.
               '評価：'. $result;
          ?>
          </div>
        </li>
        <!-- ２教科のテストの点数をランダムで生成して、条件に応じて合格/不合格を表示 -->
        <li class="p-list__item">
        <p class="p-list__title">２教科のテストの点数をランダムで生成して、条件に応じて合格/不合格を表示</p>
          <div class="p-list__body">
          <?php 
          $scoreA = rand(0,100);
          $scoreB = rand(0,100);
          $totalScore = $scoreA + $scoreB;

          // 合否確定
          if ($scoreA >= 60 && $scoreB >= 60 ||
              $totalScore >= 130 ||
              $totalScore >= 100 && $scoreA >= 90 ||
              $scoreB >= 90) 
          {
            $passOrFail = "合格";
          } else {
            $passOrFail = "不合格";
          }

          echo 
          '1教科目：' . $scoreA. '点<br>'.
          '2教科目：' . $scoreB. '点<br>'.
          '合計：' . $totalScore. '点<br>'.
          '合否：' . $passOrFail;
          ?>
          </div>
        </li>
      </ul>
    </main>
  </div>  
</body>
</html>