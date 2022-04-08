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
    
    public function __construct()
    { 
        /*  $this->middleware('auth'); */
    }
    

    /** * @return \Illuminate\Http\Response 
        * I N D E X
    */
    public function index() 
    { 
        // $books ['books'] = Book::all(); /* ::paginate(15); */
        // return view('livewire.book.index', $books);
    }

    
    /** * @param  \App\Models\Book $book
        * @return \Illuminate\Http\Response 
        * S H O W 
    */
    public function show($book) 
    {        
        return view('pages.book-detail', ['book' => $book] );
    }


    /** * @return \Illuminate\Http\Response 
        * C R E A T E  
    */
    public function create() 
    {
        return view('livewire.book.create');
    }
    

    /** * @param  \App\Http\Requests\StoreBookRequest $request   
        * @return \Illuminate\Http\Response 
        * S T O R E 
    */
    public function store(Request $request) 
    {
        $dataBook = request()->except('_token');

        if($request->hasFile('cover')){
            $dataBook['cover']=$request->file('cover')->store('storage', 'public');
        }
        Book::insert($dataBook);
        /*   $book = response()->json($dataBook); */
        return redirect()->route('livewire.book.index');
        /*   return view('livewire.book.create', ['book' => $book] ); */
    }


    /** * @param  \App\Models\Book $book
        * @return \Illuminate\Http\Response 
        * E D I T 
    */
    public function edit($book) 
    {
        return view('livewire.book.edit', ['book' => $book]);
    }


    /** * @param  \App\Http\Requests\UpdateBookRequest $request
        * @param  \App\Models\Book  $book
        * @return \Illuminate\Http\Response 
        * U P D A T E 
    */
    public function update(/* UpdateBookRequest $request,  */Book $book) 
    {
        $dataBook = request()->except(['_token', '_method']);
        /* 
        if($request->hasFile('cover')){
            $book = Book::findOrFail($book);
            Storage::delete('storage/'.$book->cover);
            $dataBook['cover']=$request->file('cover')->store('storage', 'public');
        } 
        */
        Book::where('id', '=', $book)->update($dataBook);
        $book = Book::findOrFail($book);
        return view('livewire.book.edit', compact ('book') );
    }


    /** * @param  \App\Models\Book $book
        * @return \Illuminate\Http\Response  
        * D E S T R O Y 
    */
    public function destroy($book) 
    {
        Book::destroy($book->id);
        return redirect('livewire.book');
    }
    
}
