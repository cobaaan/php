<?php

$date_time = new DateTime('', new DateTimeZone('Asia/Tokyo'));
$time = $date_time->format('H:i');
echo $time;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <head>
    <h2>World Clock</h2>
  </head>
  <h2>日本と世界の時</h2>
  <form action="result.php" method="GET">
    <select name="country">
      <option value="ニューヨーク">ニューヨーク</option>
      <option value="シドニー">シドニー</option>
      <option value="ロンドン">ロンドン</option>
      <option value="上海">上海</option>
      <option value="モスクワ">モスクワ</option>
      <option value="ヨハネスブルグ">ヨハネスブルグ</option>
    </select>
    <input type="submit" value="検索">
  </form>
</body>
</html>