<div class="d-flex flex-row align-content-center">        
    @guest
  
        @if (Route::has('login') || Route::has('register'))
            <button class="card" type="button">
                <a  href="{{ route('admin-login') }}"><p class="nav-text-dark">{{ __('admin acces') }}</p></a>
            </button>
            <button  type="button">
                <a href="{{ route('login') }}"><p class="nav-text-dark">{{ __('Login') }}</p></a>
            </button>   
            <button  type="button">
                <a href="{{ route('register') }}"><p class="nav-text-dark">{{ __('Register') }}</p></a>
            </button>
            @else
            <button type="button"  data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <a class="nav-text-dark" href="{{ route('home') }}"><p class="subtitle">{{ __('home') }}</p></a>
            </button> 
            @endif
    
    @endguest
    @auth
    <div class="dropdown">

        <a id="navbarDropdown" class="fluid " role="button" href="#" data-bs-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false" v-pre>
            <p class="nav-text-dark">{{ $profile_name }}</p>
            <img class="profile-image-s" src="{{ $profile_image }}" alt="{{ $profile_name }}">
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">     

            <a class="dropdown-item" href="/profile/{{ $id }}" onclick="event.preventDefault(); 
                document.getElementById('profile-form').submit();">
                {{ __('Mi Perfil') }}
            </a>
            <form id="profile-form" action="/profile/{{ $id }}" method="GET" class="d-none">
                @csrf
            </form>
            
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>

    </div>
    @endauth
    
</div>
