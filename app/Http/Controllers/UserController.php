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
        
        $fav_books = array ();
     
        foreach($user->books as $fav_book)
        {
           $book_id = $fav_book->pivot->book_id; // Correctly gets the book_id
           $fav_book = Book::where('id', '=', $book_id)->first();
           array_push($fav_books, $fav_book); 
        }

        return view('pages.profile', [
            'id' => User::findOrFail($id),
            'fav_books' => $fav_books
        ]);

    }

    public function admin()
    {
        return view('auth.admin-login');
    }
}
