<?php
$api_url = "https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?earth_date={$date}&camera={$camera}&api_key=9Zuf0CoeDMHwIqDaZQseHxRaGgpGpId7xrAHDPGg";

$json_data = file_get_contents($api_url);

$response_data = json_decode($json_data, true);


$CAMYear_1 = $response_data["photos"]["0"]["img_src"] ?? null;
$CAMYear_2 = $response_data["photos"]["1"]["img_src"] ?? null;
$CAMYear_3 = $response_data["photos"]["2"]["img_src"] ?? null;
$CAMYear_4 = $response_data["photos"]["3"]["img_src"] ?? null;
$CAMYear_5 = $response_data["photos"]["4"]["img_src"] ?? null;

$arrayF = array($CAMYear_1,$CAMYear_2,$CAMYear_3,$CAMYear_4,$CAMYear_5);
foreach($arrayF as $y){
    echo "<img src= $y>";
}


?>