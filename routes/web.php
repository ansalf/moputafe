<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('user.index');
// });

// Route landing page
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/feature', [HomeController::class, 'feature'])->name('feature');

Route::get('/project', [HomeController::class, 'project'])->name('project');

Route::get('/quote', [HomeController::class, 'quote'])->name('quote');

Route::get('/service', [HomeController::class, 'service'])->name('service');

Route::get('/team', [HomeController::class, 'team'])->name('team');

Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

Route::get('/404', [HomeController::class, '404'])->name('404');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');


// Login Routes
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
//Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);
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

Route::get('/index', function () {
    return view('index');
});

// Route Player
// Route::get('players', [PlayerController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::resource('dashboard/users', \App\Http\Controllers\Admin\AdminUserController::class)->except('show')->middleware('is_admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
?>
