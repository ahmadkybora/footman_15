<?php

use App\Services\App;
use App\Http\Controllers\HomeController;

$app = new App();

$app->router->get('/', [HomeController::class, 'index']);

$app->run();