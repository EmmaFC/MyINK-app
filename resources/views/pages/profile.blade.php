  
    @extends('layouts.app')

    @section('content')

        
            {{--    <div class="row justify-content-center"> --}}  
               <div class="col-12">
                 <div id="user_section" class="container description-box fluid"> 
                    <div class="container">
                        @if(Auth::user()->image)
                        <img class="profile-image-m" src="{{asset('/storage/images/'.Auth::user()->image)}}">
                        @endif

                        <img class="profile-image-m" src="{{ Auth::user()->image }}" />
                    </div>
                    <div class="d-flex flex-column"> 
                        <div class="title">{{ Auth::user()->name }}</div>
                        <div class="text">{{ Auth::user()->description }}</div>
                    </div>
                </div>

                <div id="fav_user_books_section">
                    @foreach ($fav_books as $fav_book) 
                    <x-card-book  
                    :book='$fav_book'
                    :cover='$fav_book->cover'
                    :id='$fav_book->id'
                    />
                    @endforeach
                </div>

               </div>
            {{-- </div> --}}     
        



    @endsection
