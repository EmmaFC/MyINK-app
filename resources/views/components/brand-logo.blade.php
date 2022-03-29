<div>
    @guest
        @if (Route::has('login') || Route::has('register'))
            <a class="d-flex flex-row justify-content-between align-content-center" href="{{ route('welcome') }}">
                <img class="brand-logo" src="storage/logo-myink-v1.svg" alt="MyINK logo"/>
            </a>
        @endif
        
        @else
            <a class="d-flex flex-row justify-content-between align-content-center" href="{{ route('home') }}">
                <img class="brand-logo" src="storage/logo-myink-v1.svg" alt="MyINK logo"/>
            </a>
    @endguest
    
</div>