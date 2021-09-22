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
        <a href="/">PHP,curriculum - lesson09</a>
      </h1>
    </header>
    <main class="l-main">
      <ul class="p-list">
        <!-- フォームからデータを送信 -->
        <li class="p-list__item">
          <p class="p-list__title">フォームからデータを送信</p>
          <div class="p-list__body">
          <form action="index.php" method="post">
            <label>名前</label><input type="text" name="name"><br/>
            <label>年齢</label><input type="number" name="age"><br/>
            <input type="submit" value="送信">
          </form>
          </div>
        </li>

        <!-- データを表示 -->
        <li class="p-list__item">
          <p class="p-list__title">受け取ったデータを表示</p>
          <div class="p-list__body">
          <?php
          function checkPost(){

            $name = $_POST['name'];
            $age = $_POST['age'];
            $msg = "　";
            if(isset($name) || isset($age)){
  
              if(empty($name) || empty($age)){
                $msg = "未入力箇所があります。";
              } else {
                if($age >= 120) {
                  $msg = "正しい年齢を入力してください";
                } else {
                  $msg = "{$name}さんは{$age}歳です";
                }
              }
            }
            echo $msg;
          }
          checkPost();
          ?>
          </div>
        </li>

        <!-- ログイン機能 -->
        <li class="p-list__item">
          <p class="p-list__title">ログイン機能</p>
          <div class="p-list__body">
          <form action="index.php" method="post">
            <label>ユーザーID</label><input type="text" name="id"><br/>
            <label>パスワード</label><input type="text" name="password"><br/>
            <input type="submit" value="送信">
          </form>
          </div>
        </li>

        <!-- ユーザー参照 -->
        <li class="p-list__item">
          <p class="p-list__title">ユーザー参照</p>
          <div class="p-list__body">
          <?php

          // function array_search(){
          // };
          

          function checkUser(){
            $users = [
              [
                "id" => "aaa",
                "password" => "111",
                "name" => "卍佐藤拓磨卍"
              ],
              [
                "id" => "bbb",
                "password" => "222",
                "name" => "バッファローマン"
              ],
              [
                "id" => "ccc",
                "password" => "333",
                "name" => "†漆黒の堕天使†"
              ]
            ];

            $id = $_POST['id'];
            $password = $_POST['password'];
            $msg = "　";
            $idKey = array_search( $id, array_column( $users, "id"));
            $passwordKey = array_search( $password, array_column( $users, "password"));

            if(isset($id) || isset($password)){
  
              if(empty($id) || empty($password)){
                $msg = "未入力箇所があります。";
              } else {
                if($idKey === $passwordKey) {
                  $msg = "Welcome {$users[$idKey]["name"]} 様";
                } else {
                  $msg = "IDまたはパスワードが違います。";
                }
              }
            }

            echo $msg;
          }
          checkUser();
          ?>
          </div>
        </li>
      </ul>
    </main>
  </div>  
</body>
</html>