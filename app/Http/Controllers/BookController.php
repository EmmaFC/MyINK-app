<?php

namespace App\Http\Controllers;

use App\Models\Book;
use app\models\User;
use App\Models\ContactLink;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
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

    //
    
    public function index()
    { 
        $books ['books'] = Book::all(); /* ::paginate(15); */
        return view('book.index', $books);

    }

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */

    //

    public function store(StoreBookRequest $request)
    {
        $dataBook = request()->except('_token');

        if($request->hasFile('cover')){
            $dataBook['cover']=$request->file('cover')->store('storage', 'public');
        }

        Book::insert($dataBook);
        return response()->json($dataBook);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */


    //

    public function show($id)
    {        
       $book = Book::findOrFail($id);     
       return view('pages.book-detail', ['book' => $book] );
   
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */


    //

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('book.edit', compact ('book') );

    }


    /**  Update the specified resource in storage. 
    * @param  \App\Http\Requests\UpdateBookRequest  $request
    * @param  \App\Models\Book  $book
    * @return \Illuminate\Http\Response    */
    

    public function update(UpdateBookRequest $request, Book $id)
    {
        $dataBook = request()->except(['_token', '_method']);

        if($request->hasFile('cover')){
            $book = Book::findOrFail($id);
            Storage::delete('storage/'.$book->cover);
            $dataBook['cover']=$request->file('cover')->store('storage', 'public');
        }

        Book::where('id', '=', $id)->update($dataBook);
        $book = Book::findOrFail($id);
        return view('book.edit', compact ('book') );

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */


    //

    public function destroy($id)
    {
        Book::destroy($id);
        return redirect('book');

    }


    
}
