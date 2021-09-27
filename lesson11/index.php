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
        <a href="/">PHP,curriculum - lesson11</a>
      </h1>
    </header>
    <main class="l-main">
      <ul class="p-list">
        <!-- XSS対策あり -->
        <li class="p-list__item">
          <p class="p-list__title">XSS対策あり</p>
          <div class="p-list__body">
            <form action="index.php" method="get">
              <input type="text" name="message"><br />
              <input type="checkbox" name="hoby[]" value="musicappreciation">音楽鑑賞<br />
              <input type="checkbox" name="hoby[]" value="moviegoing">映画鑑賞<br />
              <input type="checkbox" name="hoby[]" value="reading">読書<br />
              <input type="checkbox" name="hoby[]" value="fishing">釣り<br />
              <input type="submit" value="submit">
            </form>

          </div>
        </li>
        <li class="p-list__item">
          <p class="p-list__title">表示結果</p>
          <div class="p-list__body">
            <?php
            function task1()
            {
              /**
               * HTML特殊文字をエスケープする関数
               * 
               * @param $request 対象の文字列
               * @return 処理された文字列 
               */
              function escape($request)
              {
                return htmlspecialchars($request, ENT_HTML5, "UTF-8");
              }
              $text = "　";

              if ($_GET['message']) {
                $text = escape($_GET['message']);
              }
              echo $text;
            }
            task1();
            ?>
          </div>
        </li>

        <!-- XSS対策なし -->
        <li class="p-list__item">
          <p class="p-list__title">XSS対策なし</p>
          <div class="p-list__body">
            <p>下記を順に入力して確認</p>
            <p>test</p>
            <p>&lt;h1 style="color: red;"&gt;test&lt;/h1&gt;</p>
            <form action="index.php" method="get">
              <input type="text" name="test"><br />
              <input type="submit" value="submit">
            </form>
          </div>
        </li>
        <li class="p-list__item">
          <p class="p-list__title">表示結果ああああああ</p>
          <div class="p-list__body">
            <?php
            function task2()
            {
              $text = "　";
              if ($_GET['test']) {
                $text = $_GET['test'];
              }
              echo $text;
            }
            task2();
            ?>
          </div>
        </li>
      </ul>
    </main>
  </div>
</body>

</html>