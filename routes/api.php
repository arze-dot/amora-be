<?php

use App\Http\Controllers\Api\HealthCheckController;
use Illuminate\Support\Facades\Route;

Route::get('/health-check', [HealthCheckController::class, 'index']);
Route::get('/welcome', [HealthCheckController::class, 'test']);
