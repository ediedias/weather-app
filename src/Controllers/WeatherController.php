<?php

namespace App\Controllers;

use App\Models\Weather;

class WeatherController
{
    public function index(): void
    {
        $weatherData = null;

        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $city = $_POST['city'];
            $weather = new Weather();
            $weatherData = $weather->getWeather($city);
        }

        include '../src/Views/weather.php';
    }
}