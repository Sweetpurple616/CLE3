<?php 
$Key = "5ce78d03d8672ce3fced7c87fcf35a26";
$CityCode = "Rotterdam, NL";

$website = "http://api.openweathermap.org/data/2.5/forecast?id=2747891&units=metric&APPID=" . $Key;
$json = file_get_contents($website);
$decodedJson = json_decode($json);
$temp = $decodedJson->list[0]->main->temp;
$weather = $decodedJson->list[0]->weather[0]->main;
$image = $decodedJson->list[0]->weather[0]->icon;
$tempOver3 = $decodedJson->list[1]->main->temp;
$weatherOver3 = $decodedJson->list[1]->weather[0]->main;
$weatherimg = "http://openweathermap.org/img/w/" . $image. ".png";

$weer = [
    "temp" => $temp,
    "weather" => $weather,
    "iconurl" => $weatherimg,
    "tempOver3" => $tempOver3,
    "weatherOver3" => $weatherOver3
];

// add image

echo json_encode($weer);
header("Content-type:application/json");

?>

