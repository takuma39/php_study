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
        <a href="/">PHP,curriculum - lesson10</a>
      </h1>
    </header>
    <main class="l-main">
      <ul class="p-list">
        <!-- 各都道府県名を表示させる -->
        <li class="p-list__item">
          <p class="p-list__title">各都道府県名を表示させる</p>
          <div class="p-list__body">
            <?php
            function task1()
            {
              // sample.jsonを格納
              $jsonFile = file_get_contents('sample.json');
              $prefectures = json_decode($jsonFile, true);

              foreach ($prefectures[0] as $id) {
                echo $id["name"] . '/';
              }
            }
            task1();
            ?>
          </div>
        </li>


        <!-- 各都道府県名、市区町村を表示させる -->
        <li class="p-list__item">
          <p class="p-list__title">各都道府県名、市区町村を表示させる</p>
          <div class="p-list__body">
            <?php
            function task2()
            {
              // sample.jsonを格納
              $jsonFile = file_get_contents('sample.json');
              $prefectures = json_decode($jsonFile, true);

              foreach ($prefectures[0] as $id) {
                $cities = null;
                foreach ($id["city"] as $city) {
                  $cities[] = $city["city"];
                  $array[$id["name"]] = $cities;
                }
              }

              foreach ($array as $name => $cities) {
                echo $name . '<br>';
                foreach ($cities as $id => $city) {
                  echo $city . '/';
                }
                echo "<br><br>";
              }
            }
            task2();
            ?>
          </div>
        </li>


        <!-- 各地方、各都道府県名、市区町村を表示させる -->
        <li class="p-list__item">
          <p class="p-list__title">各地方、各都道府県名、市区町村を表示させる</p>
          <div class="p-list__body">
            <?php
            function task3()
            {
              // sample.jsonを格納
              $jsonFile = file_get_contents('sample.json');
              $prefectures = json_decode($jsonFile, true);

              $japan = [
                "北海道地方" => ["県名" => [], "市町村名" => []],
                "東北地方" => ["県名" => [], "市町村名" => []],
                "関東地方" => ["県名" => [], "市町村名" => []],
                "中部地方" => ["県名" => [], "市町村名" => []],
                "近畿地方" => ["県名" => [], "市町村名" => []],
                "中国地方" => ["県名" => [], "市町村名" => []],
                "四国地方" => ["県名" => [], "市町村名" => []],
                "九州地方" => ["県名" => [], "市町村名" => []],
              ];

              foreach ($prefectures[0] as $id) {
                $number = intval($id["id"]);

                switch ($number) {
                    // 北海道地方
                  case $number <= 1:
                    $japan["北海道地方"]["県名"][] = $id["name"];
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["北海道地方"]["市町村名"][] = $cityVal["city"];
                    }
                    break;

                    // 東北地方
                  case $number <= 7:
                    $japan["東北地方"]["県名"][] = $id["name"];
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["東北地方"]["市町村名"][] = $cityVal["city"];
                    }
                    break;

                    // 関東地方
                  case $number <= 14:
                    $japan["関東地方"]["県名"][] = $id["name"];
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["関東地方"]["市町村名"][] = $cityVal["city"];
                    }
                    break;


                    // 中部地方
                  case $number <= 23:
                    $japan["中部地方"]["県名"][] = $id["name"];
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["中部地方"]["市町村名"][] = $cityVal["city"];
                    }
                    break;

                    // 近畿地方
                  case $number <= 30:
                    $japan["近畿地方"]["県名"][] = $id["name"];
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["近畿地方"]["市町村名"][] = $cityVal["city"];
                    }
                    break;


                    // 中国地方
                  case $number <= 35:
                    $japan["中国地方"]["県名"][] = $id["name"];
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["中国地方"]["市町村名"][] = $cityVal["city"];
                    }
                    break;


                    // 四国地方
                  case $number <= 39:
                    $japan["四国地方"]["県名"][] = $id["name"];
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["四国地方"]["市町村名"][] = $cityVal["city"];
                    }
                    break;


                    // 九州地方
                  case $number <= 47:
                    $japan["九州地方"]["県名"][] = $id["name"];
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["九州地方"]["市町村名"][] = $cityVal["city"];
                    }
                    break;


                    // 条件外
                  default:
                    return "該当なし";
                }
              }

              foreach ($japan as $region => $array) {
                echo
                "----------------------------------------" . $region . "----------------------------------------" . "<br><br>";
                foreach ($array as $key => $array2) {
                  echo
                  "------------------------------" .
                    $key .
                    "------------------------------" .
                    "<br><br>";
                  foreach ($array2 as $val) {

                    echo $val . '/';
                  }
                  echo "<br><br>";
                }
              }
            }
            task3();
            ?>
          </div>
        </li>


        <!-- 上記よりも見やすい配列に変更 -->
        <li class="p-list__item">
          <p class="p-list__title">上記よりも見やすい配列に変更</p>
          <div class="p-list__body">
            <?php
            function task4()
            {
              // sample.jsonを格納
              $jsonFile = file_get_contents('sample.json');
              $prefectures = json_decode($jsonFile, true);

              foreach ($prefectures[0] as $id) {
                $number = intval($id["id"]);

                switch ($number) {
                    // 北海道地方
                  case $number <= 1:
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["北海道地方"][$id["name"]][] = $cityVal["city"];
                    }
                    break;

                    // 東北地方
                  case $number <= 7:
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["東北地方"][$id["name"]][] = $cityVal["city"];
                    }
                    break;

                    // 関東地方
                  case $number <= 14:
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["関東地方"][$id["name"]][] = $cityVal["city"];
                    }
                    break;


                    // 中部地方
                  case $number <= 23:
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["中部地方"][$id["name"]][] = $cityVal["city"];
                    }
                    break;

                    // 近畿地方
                  case $number <= 30:
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["近畿地方"][$id["name"]][] = $cityVal["city"];
                    }
                    break;


                    // 中国地方
                  case $number <= 35:
                    // $japan["中国地方"][] = $id["name"];

                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["中国地方"][$id["name"]][] = $cityVal["city"];
                    }
                    break;


                    // 四国地方
                  case $number <= 39:
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["四国地方"][$id["name"]][] = $cityVal["city"];
                    }
                    break;


                    // 九州地方
                  case $number <= 47:
                    foreach ($id["city"] as $cityKey => $cityVal) {
                      $japan["九州地方"][$id["name"]][] = $cityVal["city"];
                    }
                    break;


                    // 条件外
                  default:
                    return "該当なし";
                }
              }

              foreach ($japan as $region => $array) {
                echo
                "----------------------------------------" . $region . "----------------------------------------" . "<br><br>";
                foreach ($array as $prefecture => $municipalities) {
                  echo
                  "------------------------------" .
                    $prefecture .
                    "------------------------------" .
                    "<br><br>";

                  foreach ($municipalities as $val) {
                    echo $val . '/';
                  }
                  echo "<br><br>";
                }
              }
            }
            task4();
            ?>
          </div>
        </li>

      </ul>
    </main>
  </div>
</body>

</html>