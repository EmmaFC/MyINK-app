<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
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

Route::get('/', function () {

    $random_book = Book::all()->random(1);
    return view('welcome', ['random_book' => $random_book]);
  
})->name('welcome');

Auth::routes();

/* Route::get('/home', [HomeController::class, 'index'])->name('home');
 */Route::get('/home', [BookController::class, 'index'])->name('home');
