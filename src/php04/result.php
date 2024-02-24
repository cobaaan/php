<?php
require_once('./config/status_codes.php');
//include('index.php');
$sel = htmlspecialchars($_POST['ans'],$ENT_QUOTES);
$sel1 = htmlspecialchars($_POST['select'],$ENT_QUOTES);
//echo $status_code[$sel];
//echo $status_code[$sel1];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if($sel === $sel1){
        $a = "正解";
        echo $a;
    } else {
        $b = '不正解';
        echo $b;
    }  ?>

    <?php echo $sel1 . '   select'  ?>

</body>
</html>