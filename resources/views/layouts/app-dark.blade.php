<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <x-head />

    <body class="body-dark">
        <div id="app"> 
             
            <x-header 
            :id='$id = 2'
            />

            <main class="main">
                @yield('content')
            </main>
            <x-footer />

        </div>
        @livewireScripts
    </body>

</html>
