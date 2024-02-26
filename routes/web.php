<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MyClientController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/clients', [MyClientController::class, 'index']);
Route::post('/clients', [MyClientController::class, 'store']);
Route::put('/clients/{id}', [MyClientController::class, 'update']);
Route::delete('/clients/{id}', [MyClientController::class, 'destroy']);