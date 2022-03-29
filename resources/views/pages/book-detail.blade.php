
    @extends('layouts.app')

    @section('content')

          {{-- <div class="row justify-content-center">  --}} 
            <div class="d-flex flex-wrap">
            <div class="container fluid">
                
                <img src="{{ $book->cover }}" alt="{{ $book->title }}" width="300"/>
                <div>
                    <div class="container justify-content-start">
                        <h1>{{ $book->title }}</h1>
                        <h3>{{ $book->author }}</h3>
                        <p>{{ $book->description }}</p>
                    </div>

                    <div class="container d-flex flex-row">
                        <a href="#">Star</a>
                        <a href="#">Star</a>
                        <a href="#">Star</a>
                        <a href="#">Star</a>
                        <a href="#">Star</a>
                    </div>
                </div>

                
            </div>
            <div class="container">
                <a href="{{ route('home') }}">Volver</a>
                <a href="#">Heart</a>
            </div>
           </div>
            {{--  </div> --}}     
       

    @endsection
