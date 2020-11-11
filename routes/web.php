<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


Route::get('/', [UserController::class, 'index']);
Route::get('register', [UserController::class, 'register']);
Route::post('addrouter', [\App\Http\Controllers\RouterController::class, 'addrouter']);
Route::post('adduser', [UserController::class, 'adduser']);
Route::post('login', [UserController::class, 'login']);
