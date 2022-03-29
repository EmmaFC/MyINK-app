  
    @extends('layouts.app')

    @section('content')

        
            {{--    <div class="row justify-content-center"> --}}  
               <div class="col-12">d
                {{--  <div id="user_section">
                    <img src="{{ Auth::user()->image }}" />
                    <div>{{ Auth::user()->name }}</div>
                    <div>{{ Auth::user()->description }}</div>
                </div> --}}

                {{-- <div id="fav_user_books_section">
                    @foreach ($favourite_books as $favourite_book) 
                    <x-card-book  
                    :book='$favourite_book'
                    :cover='$favourite_book->cover'
                    :id='$favourite_book->id'
                    />
                    @endforeach
                </div> --}}

               </div>
            {{-- </div> --}}     
        



    @endsection
