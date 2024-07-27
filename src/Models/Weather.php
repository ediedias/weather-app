<?php

namespace App\Models;

class Weather
{
    private $apiKey = 'your_api_key';

    public function getWeather($city): array
    {
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$this->apiKey}&units=metric";
        $response = file_get_contents($url);
        return json_decode($response, true);
    }
}