<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $books = Book::all();
        return view('pages.dashboard', ['books' => $books]);
      
    }

    //

    public function landingpage ()
    {
        $random_book = Book::inRandomOrder()->first();
        return view('welcome', ['random_book'=>$random_book]);

    }
}


/* return redirect()->back(); */