<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use app\Models\Book;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;
use App\User;
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

/* 
Route::livewire('/', 'image-upload');
 */
Route::get('/', [HomeController::class, 'landingpage'])->name('welcome');

Auth::routes();
Route::get('/admin-login', [UserController::class, 'admin'])->name('admin-login');

Route::group (['middleware' => 'auth'], function() {

        Route::get('/home', [UserController::class, 'index'])->name('home');
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('/profile/{id}', [UserController::class, 'show'])->name('profile');
        Route::get('/book/{id}', [BookController::class, 'show'])->name('book-detail');
        
        
        Route::resource('book', BookController::class);
        /*  Route::get('/book', [BookController::class, 'index'])->name('book.index');
         Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
         Route::get('/book/edit', [BookController::class, 'edit'])->name('book.edit');
         Route::get('/book/delete', [BookController::class, 'delete'])->name('book.delete'); */
});