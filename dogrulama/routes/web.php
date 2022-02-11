<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welcome',[\App\Http\Controllers\Controller::class,"welcome"])->name('welcome');
Route::post('index',[\App\Http\Controllers\AuthController::class,"index"])->name('index');
Route::post('random',[\App\Http\Controllers\AuthController::class,"random"])->name('random');
Route::post('dogrulapost',[\App\Http\Controllers\AuthController::class,"dogrulapost"])->name('dogrulapost');
Route::get('onay',[\App\Http\Controllers\AuthController::class,"onay"])->name('onay');
Route::get('exit',[\App\Http\Controllers\AuthController::class,"exit"])->name('exit');
