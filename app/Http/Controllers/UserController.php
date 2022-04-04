<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\models\User;
use App\Models\Book;

class UserController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* $this->middleware('auth'); */
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $books = Book::all();
        return view('pages.home', ['books' => $books]);
      
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {   
        $user = User::findOrFail($id);
        $fav_books = array();

        foreach ($user->books as $table_books) {
            
            $table_books = $table_books->pivot->book_id;
            $fav_book = Book::find($table_books);
            array_push($fav_books, $fav_book);
        }

        return view('pages.profile', [
            'id' => User::findOrFail($id),
            'fav_books' => $fav_books
        ]);
       
    }

    public function addFavorite($id_user, $id_book){

        $user = User::findOrFail($id_user);
        $book = $id_book;
        if (isset($user->books()->$book)){
            Book::find($book)->user()->newPivotStatementForId(Auth::id())->whereStatus(0)->delete();
        }
        else {
            $user->books()->attach($book);
        }

    }

   /*  public function current_user ($id)
    {   
        $user = User::findOrFail($id);
        $id = $user->id;
        return view('layouts.app', [
            'id' => User::findOrFail($id),
        ]);
       
    } */

    public function admin()
    {
        return view('auth.admin-login');
    }


    

}
