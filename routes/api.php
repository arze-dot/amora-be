<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post("login", [AuthController::class, "login"]);

Route::group([
    "middleware" => ["auth:api"]
], function () {
    Route::post("user", [UserController::class, "register"]);
    Route::get("logout", [AuthController::class, "logout"]);
});

// BAWAAN LARAVEL
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
