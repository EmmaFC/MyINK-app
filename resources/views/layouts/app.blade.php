<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <x-head />

    <body>
        <div id="app"> 

            <x-header />
            <main class="py-4 main">
                @yield('content')
            </main>
            <x-footer />

        </div>
    </body>

</html>
