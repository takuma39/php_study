<?php 
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
  <title>Lesson</title>
</head>
<body>
  <div class="l-wrap">
    <?php 
    echo "<h1 class='l-title'>PHP,curriculum</h1>";
    ?>
    <main class="l-main">
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