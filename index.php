<?php 
$lessons = [
  ["title" => "lesson01", "url" => "./lesson01/index.php"],
  ["title" => "lesson02", "url" => "./lesson02/index.php"],
  ["title" => "lesson03", "url" => "./lesson03/index.php"],
  ["title" => "lesson04", "url" => "./lesson04/index.php"],
  ["title" => "lesson05", "url" => "./lesson05/index.php"],
  ["title" => "lesson06", "url" => "./lesson06/index.php"],
  ["title" => "lesson07", "url" => "./lesson07/index.php"],
  ["title" => "lesson08", "url" => "./lesson08/index.php"],
  ["title" => "lesson09", "url" => "./lesson09/index.php"],
  ["title" => "lesson10", "url" => "./lesson10/index.php"],
  ["title" => "lesson11", "url" => "./lesson11/index.php"],
  ["title" => "lesson12", "url" => "./lesson12/index.php"]
]
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
      <h1 class='l-header__title'>
        <a href="/">PHP,curriculum</a>
      </h1>
    </header>
    <main class="l-main">
      <div class="p-lesson">
        <p class="p-lesson__title">lesson一覧</p>

        <ul class="p-lesson__list">
          <?php
          foreach($lessons as $lesson => $info) {
            echo 
            '<li class="p-lesson__item">
              <a class="p-lesson__link" href="'. 
              "{$info["url"]}". 
              "\">{$info["title"]}</a>
            </li>"
            ;
          }
          ?>
        </ul>
      </div>
    </main>
  </div>  
</body>
</html>