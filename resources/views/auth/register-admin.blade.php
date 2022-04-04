@extends('layouts.app')

@section('content')
<div class="column container-second">
    <div class="d-flex justify-content-start"><h1 class="section-title">{{ __('Admin Register') }}</h1></div>
        <div class="box">

                <div  class="card-box column"> 

                    <form  class="mb-16" method="POST" action="{{ route('admin-register') }}">
                        <div class="container-second">
                        @csrf

                            <div  class="container-second">

                                <div class="card">
                                    @if (isset($user->image ))
                                    <img class="card-img-top" src="{{ $user->image }}" alt="Card image cap">
                                    @else
                                    <img class="card-img-top" src="https://picsum.photos/200/300" alt="Card image cap">
                                    @endif
                                </div>
                                
                                <input id="image" class="input-dark" type="file" name="image" placeholder="{{ __('imagen de perfil') }}" @error('image') is-invalid @enderror" required autocomplete="current-image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="name" type="text" class="input-dark @error('name') is-invalid @enderror" 
                                name="name" 
                                placeholder="{{ __('Name') }}"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="code" type="password" class="input-dark @error('code') is-invalid @enderror" 
                                placeholder="{{ __('Admin Code') }}" name="code" required autocomplete="new-code">

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="email" type="email" class="input-dark @error('email') is-invalid @enderror" 
                                placeholder="{{ __('Email Address') }}" name="email" 
                                value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                                <input id="password" type="password" class="input-dark @error('password') is-invalid @enderror" 
                                placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                                <input id="password-confirm" type="password" class="input" 
                                placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password">
                            
                            </div>
                            
                            <div class="fluid mt-4 mb-4 d-flex justify-content-between align-content-center">
                                <div> 
                                    <a href="{{ route('login') }}">
                                        <h4 class="text">{{ __('¿Ya tienes cuenta?') }}</h4>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                            <div class="container-second mt-4 mb-4 d-flex justify-content-between align-content-center">
                                <a href="{{ route('welcome') }}"><h4 class="text-link">Volver</h4></a>
                                <a href="{{ route('home') }}"><button type="submit" class="btn">
                                    {{ __('Register') }}
                                </button></a>
                            </div>
                    </form>
                </div>
        
        </div>
    </div>
</div>
@endsection
