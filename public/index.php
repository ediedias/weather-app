<?php

require '../vendor/autoload.php';

use App\Controllers\WeatherController;

$controller = new WeatherController();
$controller->index();