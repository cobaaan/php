<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <h2>世界と日本の時刻を比較</h2>
  <form action="result.php" method="POST">
    <select name="city_name" id="">
      <option value="シドニー">シドニー</option>
      <option value="東京">東京</option>
      <option value="上海">上海</option>
      <option value="モスクワ">モスクワ</option>
      <option value="ロンドン">ロンドン</option>
      <option value="ヨハネスブルグ">ヨハネスブルグ</option>
      <option value="ニューヨーク">ニューヨーク</option>
    </select>
    <input type="submit" value="送信">
  </form>
</body>

</html>