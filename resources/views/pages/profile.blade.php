  
    @extends('layouts.app')

    @section('content')

        
        {{--    <div class="row justify-content-center"> --}}  
            <div class="col-12">
                   
                <div class="d-flex justify-content-start"><h1 class="section-title">{{ __('Tu perfil') }}</h1></div>
                <div id="user_section" class="{{-- container --}} description-box fluid"> 
                    <div class="container">
                       {{--  @if(Auth::user()->image)
                        <img class="profile-image-m" src="{{asset('/storage/images/'.Auth::user()->image)}}">
                        @endif --}}

                        <img class="profile-image-m" src="{{ Auth::user()->image }}" />
                    </div>
                    <div class="d-flex flex-column"> 
                        <div class="title">{{ Auth::user()->name }}</div>
                        <div class="text">{{ Auth::user()->description }}</div>
                    </div>
                </div>

                <div id="fav_user_books_section">
                    <div class="column container-second">
                        <div class="container d-flex justify-content-start"><h1 class="title">{{ __('Tus favoritos') }}</h1></div>
                    
                    <div class="container-fluid col-12 d-flex flex-wrap">

                        @foreach ($fav_books as $fav_book) 

                        <x-card-book  
                        :book='$fav_book'
                        :cover='$fav_book->cover'
                        :id='$fav_book->id'
                        />

                        @endforeach
                    
                    </div>
                </div>

            </div>
            {{-- </div> --}}     
        



    @endsection
