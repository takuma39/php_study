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
        <a href="/">PHP,curriculum - lesson08</a>
      </h1>
    </header>
    <main class="l-main">
      <ul class="p-list">
        <!-- 価格を渡し税込価格を返す関数 -->
        <li class="p-list__item">
          <p class="p-list__title">価格を渡し税込価格を返す関数</p>
          <div class="p-list__body">
          <?php 
          /**
           * @param init $price / init $price
           * @return string
           */
          function taxRateCalc($price = null, $taxRate = 10) {
            $taxRate = 1 + ($taxRate /100);
            if($price === null) {
              return "価格を入力してください";
            } elseif(is_int($price) === false) {
              return "半角英数で価格を入力してください";
            } else {
              $includedTax = round($price * $taxRate);
              return "税込み価格は{$includedTax}円です。";
            }
          }
          $msg = taxRateCalc();
          echo $msg. "<br>";
          $msg = taxRateCalc("卍佐藤拓磨卍");
          echo $msg. "<br>";
          $msg = taxRateCalc("１２３");
          echo $msg. "<br>";
          $msg = taxRateCalc(100);
          echo $msg. "<br>";
          $msg = taxRateCalc(208);
          echo $msg. "<br>";
          $msg = taxRateCalc(100, 5);
          echo $msg;
          ?>
          </div>
        </li>
        <!-- 変数が空かどうか判定 -->
        <li class="p-list__item">
          <p class="p-list__title">変数が空かどうか判定</p>
          <div class="p-list__body">
          <?php 
          /**
           * @param 型の指定なし
           * @return string
           */
          function ifEmpty($value = "") {
            if (empty($value)) {
                return 'OK';
            } else {
                return 'NG';
            }
          }
          echo ifEmpty(1). "<br>";
          echo ifEmpty(0). "<br>";
          echo ifEmpty("卍"). "<br>";
          echo ifEmpty();
          ?>
          </div>
        </li>
        <!-- 配列かどうか判定する組み込み関数 -->
        <li class="p-list__item">
          <p class="p-list__title">配列かどうか判定する組み込み関数</p>
          <div class="p-list__body">
          <?php 
          /**
           * @param 型の指定なし
           * @return string
           */
          function ifArray($value = ""){
            if(is_array($value)){
              return "OK";
            } else {
              return "NG";
            }
          }
          echo ifArray(). "<br>";
          echo ifArray(111). "<br>";
          echo ifArray("卍"). "<br>";
          echo ifArray([0,0]). "<br>";
          echo ifArray(["卍","万"]). "<br>";
          ?>
          </div>
        </li>
      </ul>
    </main>
  </div>  
</body>
</html>