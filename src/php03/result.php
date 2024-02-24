<?php
$city_name1 = htmlspecialchars($_POST['city_name'], ENT_QUOTES);

function cityTime($city_name){
  require('config/cities.php');
  foreach($cities as $city){
    if($city_name === $city['name']){
      $selectedCity = $city;
    }
  }
    return $selectedCity;
      //echo $selectedCity['name'] . '   ' . $selectedCity['time_zone'] . '   ' . $selectedCity['img'];
  };

  $tokyo = cityTime("東京");
  //echo $tokyo['name'] . '   ' . $tokyo['time_zone'] . '   ' . $tokyo['img'];
  $select = cityTime($city_name1);
  //echo $select['name'] . '   ' . $select['time_zone'] . '   ' . $select['img'];
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/result.css">
    <title>Document</title>
  </head>
  <body>
    <p><?php echo $tokyo['name']; ?></p>
    <p><?php $date_time = new DateTime('', new DateTimeZone($tokyo['time_zone']));
      $time = $date_time->format('H:i');
      echo $time;
      ?></p>
    <p><?php ?></p>
    <img class="img" src="./img/<?php echo $tokyo['img']?>" alt="">
    <br>
    <p><?php echo $select['name']; ?></p>
    <p><?php $date_time = new DateTime('', new DateTimeZone($select['time_zone']));
      $time = $date_time->format('H:i');
      echo $time;
      ?></p>
    <p><?php ?></p>
    <img class="img" src="./img/<?php echo $select['img']?>" alt="">
  </body>
  </html>