
    @extends('layouts.app')
    @section('content')

          {{-- <div class="row justify-content-center">  --}} 
            <div class="d-flex divider flex-wrap fluid">
            <div class="container description-box fluid">
                <div class="container fluid overflow-hidden">
                    <img class="book-cover-detail" src="{{ $book->cover }}" alt="{{ $book->title }}"/>
                </div>
                <div class="d-flex flex-column container fluid-box ">
                    <div class="d-flex flex-column">
                        <h1 class="title">{{ $book->title }}</h1>
                        <h3 class="subtitle">{{ $book->author }}</h3>
                        <p class="text">{{ $book->description }}</p>
                    </div>

                    <div class="book-ranking mt-10 d-flex flex-row justify-content-between align-content-center">
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                    </div>
                </div>

            </div>
            <div class="container mt-14 mb-4 d-flex justify-content-between align-content-center">
                <a href="{{ route('home') }}"><h4 class="text-link">Volver</h4></a>

                    {{-- @if($book->isFavourited)
                        <a id="deletefavourite{{$fav_book->id}}" onClick="deleteFavourites({{$fav_book->id}}, {{ Auth::user()->id }})" name="addfavourite">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                    @else
                        <a id="addfavourites{{$fav_book->id}}" onClick="addFavourites({{$fav_book->id}}, {{ Auth::user()->id }})" name="deletefavourite">
                            <i class="fas fa-heart" ></i>
                        </a>
                    @endif --}}
                    
               {{--  $user->books()->sync($book); --}}
            </div>
            </div>
            {{--  </div> --}}     
       

    @endsection
