<?

function searchCityTime($city_name){
    require ('cities.php');
    //echo $city_name . 'sct' . "<br>";
    //echo $cities[0]["name"];
    if($cities[3]['name'] === $city){
        //echo "onaji" . 'sct1' . "<br>";
    }

    foreach($cities as $city) {
        if($city['name'] === $city_name){
            $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
            $time = $date_time->format('H:i');
            $city['time'] = $time;

            return $city;
        }
    }
}