<?php

$array = [
  [
    "info" => [
      "name" => "田中",
      "division" => "1",
      "age" => "25"
    ],
    "skill" => [
      "lang" => [
        "PHP",
        "Ruby"
      ],
      "fw" => [
        "Laravel",
        "CakePHP",
        "Rails"
      ]
    ],
    "description" => "バックエンドエンジニア"
  ],
  [
    "info" => [
      "name" => "山田",
      "division" => "2",
      "age" => "23"
    ],
    "skill" => [
      "lang" => [
        "HTML",
        "CSS",
        "JS"
      ],
      "fw" => [
        "Vue.js"
      ]
    ],
    "description" => "フロントエンドエンジニア"
  ],
  [
    "info" => [
      "name" => "佐藤",
      "division" => "2",
      "age" => "20"
    ],
    "skill" => [
      "lang" => [
        "PHP"
      ],
      "fw" => [

      ]
    ],
    "description" => "PHP初学者"
  ]
];
?>
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
      echo "<h1 class='l-header__title'>PHP,curriculum - lesson06</h1>";
      ?>
    </header>
    <main class="l-main">
      <ul class="p-list">
        <!-- $array表示 -->
        <?php
        for($i = 0; $i < count($array); $i++){
          echo 
          '<li class="p-list__item">
            <p class="p-list__title">array'. $i.'表示</p>
            <div class="p-list__body">';
            foreach($array[$i]["info"] as $key => $value) {
              echo $value. "<br>";
            }
            foreach($array[$i]["skill"]["lang"] as $value) {
              echo $value. "<br>";
            }
            foreach($array[$i]["skill"]["fw"] as $value) {
              echo $value. "<br>";
            }
            echo $array[$i]["description"].
            '</div>
          </li>';
        }
        ?>
      </ul>
    </main>
  </div>  
</body>
</html>