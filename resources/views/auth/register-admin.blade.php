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

                                {{-- <div class="card">
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
                                @enderror --}}
                                
                                <input id="image" class="input-dark" type="text" name="image" value="https://picsum.photos/200/300" {{-- placeholder="{{ __('imagen de perfil') }}" --}} @error('image') is-invalid @enderror" required autocomplete="current-image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="name" type="text" class="input-dark" @error('name') is-invalid @enderror" 
                                name="name" 
                                placeholder="{{ __('Name') }}"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="description" class="input-dark" type="text" name="description" value="{{ __('description') }}" placeholder="{{ __('description') }}" @error('description') is-invalid @enderror" required autocomplete="current-description">
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="email" type="email" class="input-dark" @error('email') is-invalid @enderror" 
                                placeholder="{{ __('Email Address') }}" name="email" 
                                value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                                <input id="password" type="password" class="input-dark" @error('password') is-invalid @enderror" 
                                placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                                <input id="password-confirm" type="password" class="input-dark" 
                                placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password">
                            
                                {{-- <label for="roles" class="input-dark">{{ __('Elige un rol de usuario:') }}</label>
                                <select id="roles" name="roles" required autocomplete="email" @error('role') is-invalid @enderror">
                                  <option value="admin VIP">{{ __('Admin VIP') }}</option>
                                  <option value="admin">{{ __('Admin') }}</option>
                                  <option value="user">{{ __('User') }}</option>
                                </select>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}

                                <input id="admin_key" type="password" class="input-dark" name="admin_key" value="null">

                                {{-- <input id="admin_key" type="admin_key" class="input-dark" @error('admin_key') is-invalid @enderror" 
                                placeholder="{{ __('admin_key') }}" name="admin_key" required autocomplete="new-admin_key">

                                @error('admin_key')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}

                            </div>
                            
                           {{--  <div class="fluid mt-4 mb-4 d-flex justify-content-between align-content-center">
                                <div> 
                                    <a href="{{ route('login') }}">
                                        <h4 class="text">{{ __('¿Ya tienes cuenta?') }}</h4>
                                    </a>
                                </div>
                            </div> --}}
                            
                        </div>
                            <div class="container-second mt-4 mb-4 d-flex justify-content-between align-content-center">
                                <a href="{{ route('dashboard') }}"><h4 class="text-link">Volver</h4></a>
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
