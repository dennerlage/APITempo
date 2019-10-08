<?php
    require 'vendor/autoload.php';
    
    use GuzzleHttp\Client;
    
    $baseUrl = "https://api.openweathermap.org/data/2.5";
    $appid = 'f3597973f624f1b2b7d2b967a1478f8e';
    $id = '3468879';
    $client = new Client(array('base_uri' => $baseUrl));
    
    $response = $client->get('data/2.5/weather', array('query' => array('appid' => $appid, 'id' => $id)));
    print_r($response);
?>