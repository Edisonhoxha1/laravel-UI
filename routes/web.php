<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homePage', 'HomeController@index');

Route::get('/shopList', 'ProductController@index');

Route::get('/gridDefault', 'GridDefaultController@index');

Route::get('/orderCompleted', function () {
    return view('orderCompleted');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', [CustomAuthController::class, 'login']);
Route::get('/registration', [CustomAuthController::class, 'registration']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');


