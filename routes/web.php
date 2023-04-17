<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;

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

// Login Routes
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register Routes
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store'])->name('store');

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route Settingan
Route::get('/settings', function () {
    return view('settings');
});
Route::post('/settings/save', [SettingsController::class, 'save'])->name('settings.save');

Route::get('/games', [GameController::class, 'index']);

// Route Board-pion-added
//Route::get('/board', 'BoardController@index')->name('board');
Route::get('/board', function () {
    return view('board');
});

// Route Player
Route::get('players', [PlayerController::class, 'index']);




