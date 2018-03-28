<?php 
$Key = "5ce78d03d8672ce3fced7c87fcf35a26";
$CityCode = "Rotterdam, NL";

$website = "http://api.openweathermap.org/data/2.5/forecast?id=2747891&units=metric&APPID=" . $Key;
$json = file_get_contents($website);
$decodedJson = json_decode($json);
$temp = $decodedJson->list[0]->main->temp;
$weather = $decodedJson->list[0]->weather[0]->main;

$weer = [
    "temp" => $temp,
    "weather" => $weather,
    "temp" => $temp,
    "weather" => $weather
];

echo json_encode($weer);
header("Content-type:application/json");

?>