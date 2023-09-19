<?php

use App\Http\Controllers\PusherController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pusher', [PusherController::class, 'index'])->name('pusher');
Route::post('/change', [PusherController::class, 'change'])->name('change');
Route::get('/color', [PusherController::class, 'color'])->name('color');
