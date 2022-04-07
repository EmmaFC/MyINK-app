<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\RankingController;
/* use app\Models\Book; */

use App\Http\Livewire\Book;
use App\Http\Livewire\Category;
/* use App\Http\Livewire\Role; */
use App\Http\Livewire\User;
use App\Http\Livewire\Company;
use App\Http\Livewire\Contactlinks;
/* use App\Http\Livewire\Permission; */


use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;
/* use App\User; */

 use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
/*
$role = Role::create(['name' => 'superadmin']);
$role = Role::create(['name' => 'admin VIP']);
$role = Role::create(['name' => 'admin']);
$role = Role::create(['name' => 'user']); */

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

        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/profile/{id}', [UserController::class, 'show'])->name('profile');
        Route::get('/book/{id}', [BookController::class, 'show'])->name('book-detail');
        
        Route::get('/checkfavorite/{id}', [FavoritesController::class, 'checkFavorite'])->name('checkfavorite');
        Route::get('/checkranking/{id}', [RankingController::class, 'checkRanking'])->name('checkranking');
        
        /* Route::group (['middleware' => ['role:admin|admin VIP|superadmin']], function () { */
                
                Route::resource('category', CategoryController::class);
                Route::resource('book', BookController::class);
/*                 Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');  */                
                Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
                Route::get('/category', [CategoryController::class, 'index'])->name('category.index'); 
                
              /*   Route::group (['middleware' => ['role:admin VIP|superadmin']], function() { */
                        
                        Route::resource('user', UserController::class);
                        Route::get('/role', [RolController::class, 'index'])->name('role.index');
                        
                       /*  Route::group (['middleware' => ['role:superadmin']], function() { */
                                
                                Route::resource('role', RolController::class);
                                
                                /*  Route::get('/book', [BookController::class, 'index'])->name('book.index');
                                Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
                                Route::get('/book/edit', [BookController::class, 'edit'])->name('book.edit');
                                Route::get('/book/delete', [BookController::class, 'delete'])->name('book.delete'); */
                                
               /*          });
                });
        }); */
});