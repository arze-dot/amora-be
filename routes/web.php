<?php

use App\Http\Controllers\Api\HealthCheckController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
