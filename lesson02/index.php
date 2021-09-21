<?php 
$hello = "Hello, Word";

$data = [
  [1, 1, "+"],
  [100, 10, "-"],
  [300, 5, "*"],
  [5000, 100, "/"],
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
  <title>Lesson02</title>
</head>
<body>
  <div class="l-wrap">
    <header class="l-header">
      <?php 
      echo "<h1 class='l-header__title'>PHP,curriculum - lesson02</h1>";
      ?>
    </header>
    <main class="l-main">
      <?php 
      echo "<p class='l-main__title'>{$hello}</p>";
      ?>
      <ul class="p-list">
        <?php 
          foreach($data as $x){
            echo "<li class='p-list__item'>";
            switch($x[2]){
              case "+":
                echo "{$x[0]} + {$x[1]} = ". ($x[0] + $x[1]);
                break;
              case "-":
                echo "{$x[0]} - {$x[1]} = ". ($x[0] - $x[1]);
                break;
              case "*":
                echo "{$x[0]} × {$x[1]} = ". ($x[0] * $x[1]);
                break;
              case "/":
                echo "{$x[0]} ÷ {$x[1]} = ". ($x[0] / $x[1]);
                break;             
            }
            echo "</li>";
          }
        ?>
      </ul>
    </main>
  </div>  
</body>
</html>