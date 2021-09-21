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
        <a href="/">PHP,curriculum - lesson07</a>
      </h1>
    </header>
    <main class="l-main">
      <ul class="p-list">
        <!-- 掛け算の九九を表示 -->
        <li class="p-list__item">
          <p class="p-list__title">掛け算の九九を表示</p>
          <div class="p-list__body">
          <?php 
          for($a = 1; $a <= 9; $a++){
            for($b = 1; $b <= 9; $b++){
              echo $a. " × ". $b. " = ". ($a * $b). "<br>";
            }
          }
          ?>
          </div>
        </li>
        <!-- 配列から名前、年齢、出身を表示 -->
        <li class="p-list__item">
          <p class="p-list__title">配列から名前、年齢、出身を表示</p>
          <div class="p-list__body">
          <?php 
          $emp = [
            '山田' => ['age' => '20','pref' => '東京'],
            '田中' => ['age' => '23','pref' => '神奈川'],
            '佐藤' => ['age' => '24','pref' => '埼玉'],
            '鈴木' => ['age' => '25','pref' => '千葉']
          ];

          foreach($emp as $name => $info) {
            echo 
              'name: ' . $name . '<br>'.
              'age: ' . $info['age'] . '<br>'.
              'pref: ' . $info['pref'] . '<br>'
            ;
          }
          ?>
          </div>
        </li>
        <!-- 1〜50までの3が付く数字と3の倍数だけの配列を作成、出力 -->
        <li class="p-list__item">
          <p class="p-list__title">1〜50までの3が付く数字と3の倍数だけの配列を作成、出力</p>
          <div class="p-list__body">
          <?php 
          for($i = 0; $i <= 50; $i++){
            if($i % 3 === 0 || strpos((string)$i,'3')){
              echo $i. "<br>";
            }
          }
          ?>
          </div>
        </li>


        <!-- 名前と出身地だけの連想配列を作成し、表示 -->
        <li class="p-list__item">
        <p class="p-list__title">名前と出身地だけの連想配列を作成し、表示</p>
          <div class="p-list__body">
          <?php 
          foreach($emp as $name => &$info) {
            unset($info["age"]);
          }
          var_dump($emp);
          ?>
          </div>
        </li>
      
      </ul>
    </main>
  </div>  
</body>
</html>