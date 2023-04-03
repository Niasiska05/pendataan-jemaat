<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\LoginController;
use App\Http\Controller\HomeController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/jemaat', App\Http\Controllers\JemaatController::class);
Route::resource('/login', App\Http\Controllers\LoginController::class);
