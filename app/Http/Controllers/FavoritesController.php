<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use app\models\User;
use App\Models\ContactLink;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Storage;

class FavoritesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */

    public function index($book, $user)
    { 
        //
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */

    public function checkFavorite($id)
    {
        
        $book = Book::where('id', '=', $id)->first();
        $user = Auth::user();

        if (!$book->users->contains($user->id)) {

            $book->users()->attach( Auth::user()->id, [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }

        else {
            $book->users()->detach( Auth::user()->id);
        }

        return redirect()->back();

    }
}

