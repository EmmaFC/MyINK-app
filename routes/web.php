<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use app\Models\Book;


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

Route::get('/', [BookController::class, 'landingpage'])->name('welcome');

Auth::routes();

Route::group (['middleware' => 'auth'], function() {

        Route::get('/home', [BookController::class, 'index'])->name('home');
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('/profile/{name}', [UserController::class, 'show'])->name('profile');
        Route::get('/book/{id}', [BookController::class, 'show'])->name('book');

});