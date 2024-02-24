<?php
/*
    $country = htmlspecialchars($_POST['country'],ENT_QUOTES);
    print $country;

    require('cities.php');
    //echo $cities[3]['name'];

    foreach ($cities as $city_name){
        echo $city_name['name'] . '  ' . $city_name['time_zone'] . '  ' . $city_name['img'] . '<br>';
    }

    $date_time = new DateTime("", new DateTimeZone($cities[1]['time_zone']));
    $time = $date_time->format('H:i');
    echo $cities[4]['name'] . 'の時間は' . $time . 'です';
    */
    $city = htmlspecialchars($_GET['country'],  ENT_QUOTES);
    //echo $city . "result" . "<br>";

    require_once('search_city_time.php');
    $comparison = searchCityTime($city);
    echo $comparison['name'];
    echo $comparison['time'];
    echo $comparison['img'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>World Cl</h2>
  <p>東京</p>
  
</body>
</html>