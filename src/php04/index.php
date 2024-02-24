<?php
require('./config/status_codes.php');
$num = array_rand($status_codes, 4);
$num1 = mt_rand(0, 3);
//echo '$num[$num1]' . $num[$num1] . '     ' . '$num1   ' . $num1;
echo $status_codes[$num[$num1]]['code'];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <h2>Q.以下の内容に当てはまるステータスコードを選んでください</h2>
  <h2><?php echo $status_codes[$num[$num1]]['description'] ?></h2>
<p>
    <?php
    /*
      echo $status_codes[$num[0]]['code'];
      echo $status_codes[$num[1]]['code'];
      echo $status_codes[$num[2]]['code'];
      echo $status_codes[$num[3]]['code'];
      */
    ?>
    </p>
<!--
    <form action="result.php" method="POST" id="">
      <input type="radio" name="qwe" value="qwert">
      <input type="hidden" name="asd" value="asdfg">
      <input type="submit">
    </form>
-->
    
    <form action="result.php" method='POST' id="">
      <input type="hidden" name="ans" value='<?php echo $status_codes[$num[$num1]]['code'] ?>'>
      <label><?php echo $status_codes[$num[0]]['code']. '   ' .$status_codes[$num[0]]['description']; ?><input type="radio" name="select" value='<?php echo $status_codes[$num[0]]['code'] ?>'></label><br>
      <label><?php echo $status_codes[$num[1]]['code']. '   ' .$status_codes[$num[1]]['description']; ?><input type="radio" name="select" value='<?php echo $status_codes[$num[1]]['code'] ?>'></label><br>
      <label><?php echo $status_codes[$num[2]]['code']. '   ' .$status_codes[$num[2]]['description']; ?><input type="radio" name="select" value='<?php echo $status_codes[$num[2]]['code'] ?>'></label><br>
      <label><?php echo $status_codes[$num[3]]['code']. '   ' .$status_codes[$num[3]]['description']; ?><input type="radio" name="select" value='<?php echo $status_codes[$num[3]]['code'] ?>'></label><br>
      <input type="submit" name="" id="" value="送信">
    </form>

</body>

</html>