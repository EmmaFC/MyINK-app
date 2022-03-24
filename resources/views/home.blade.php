  
    @extends('layouts.app')

    @section('content')

        <div class="container">
{{--             <div class="row justify-content-center">
 --}}                <div class="col-12">

                    @foreach ($books as $book)
                    <x-card-book  
                    :book='$book'
                    :cover='$book->cover'
                    />
                    @endforeach

                </div>
{{--             </div>
 --}}        </div>

    @endsection
