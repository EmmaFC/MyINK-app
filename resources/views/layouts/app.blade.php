<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <x-head />

    <body>
        <div id="app"> 

             {{-- @foreach($id as $current_id) --}}
                <x-header 
               {{--  :id='$current_id' --}}
                />
         {{--    @endforeach --}}

            <main class="main">
                @yield('content')
            </main>
            <x-footer />

        </div>
        @livewireScripts
    </body>

</html>
