<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('api/cookie', [UserController::class, 'cookie']);
Route::get('api/pdf', [InfoController::class, 'pdfTest']);
Route::get('api/truefalse', [InfoController::class, 'trueFalse']);
