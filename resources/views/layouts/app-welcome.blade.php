<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <x-head />
  {{--   <img src="{{ $random_book->cover }}" alt="{{ $random_book->title }}"> --}}
    <div style="background-image: url('{{ $random_book->cover }}'); background-repeat:no-repeat; background-size:cover;">
    <body>
        <div id="app"> 
             
            <x-header 
            :id='$id = 2'
            />

            <main class="main">
                @yield('content')
            </main>
            <x-footer />

        </div>
    </body></div>

</html>
