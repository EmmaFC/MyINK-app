 {{-- FORMULARIO CON DATOS EN COMÚN CON CREATE Y EDIT --}}

{{--
    <div class="column container-second">
  <div class="d-flex justify-content-start"><h1 class="section-title-dark">{{ __('Form User / Admin') }}</h1></div>
    <div class="box">
      <div  class="card-box column"> 
          <form action="{{ url('/user') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="container-second">
                <div class="container-second">

                    <div class="card">
                       @if (isset($user->cover ))
                        <img class="card-img-top" src="{{ $user->cover }}" alt="Card cover cap">
                       @else
                        <img class="card-img-top" src="https://picsum.photos/200/300" alt="Card cover cap">
                       @endif
                    </div>

                    <input id="cover" class="input-dark" type="file" name="cover" value="{{ isset($user->cover)? $user->cover : '' }}" placeholder="{{ __('imagen de portada') }}" @error('cover') is-invalid @enderror" required autocomplete="current-cover">
                    @error('cover')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="title" class="input-dark" type="text" name="title" value="{{ isset($user->title)? $user->title : ''  }}" placeholder="{{ __('título') }}" @error('title') is-invalid @enderror" required autocomplete="current-title">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="author" class="input-dark" type="text" name="author" value="{{ isset($user->author)? $user->author : ''  }}" placeholder="{{ __('autor/a') }}" @error('author') is-invalid @enderror" required autocomplete="current-author">
                    @error('author')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="year" class="input-dark" type="text" name="year" value="{{ isset($user->year)? $user->year : ''  }}" placeholder="{{ __('año de publicación') }}" @error('year') is-invalid @enderror" required autocomplete="current-year">
                    @error('year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="genre" class="input-dark" type="text" name="genre" value="{{ isset($user->genre)? $user->genre : ''  }}" placeholder="{{ __('género') }}" @error('genre') is-invalid @enderror" required autocomplete="current-genre">
                    @error('genre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="pages" class="input-dark" type="text" name="pages" value="{{ isset($user->pages)? $user->pages : ''  }}" placeholder="{{ __('páginas') }}" @error('pages') is-invalid @enderror" required autocomplete="current-pages">
                    @error('pages')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="description" class="input-dark" type="text" name="description" value="{{ isset($user->description)? $user->description : ''  }}" placeholder="{{ __('descripción') }}" @error('description') is-invalid @enderror" required autocomplete="current-description">
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="collection" class="input-dark" type="text" name="collection" value="{{ isset($user->collection)? $user->collection : ''  }}"  placeholder="{{ __('colección') }}" @error('collection') is-invalid @enderror" required autocomplete="collection" autofocus>
                    @error('collection')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                    <input id="publishing_house" class="input-dark" type="text" name="publishing_house" value="{{ isset($user->publishing_house)? $user->publishing_house : ''  }}" placeholder="{{ __('editorial') }}" @error('publishing_house') is-invalid @enderror" required autocomplete="current-publishing_house">
                    @error('publishing_house')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="edition" class="input-dark" type="text" name="edition" value="{{ isset($user->edition)? $user->edition : ''  }}" placeholder="{{ __('edition') }}" @error('edición') is-invalid @enderror" required autocomplete="current-edition">
                    @error('edition')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="container-second mt-4 mb-4 d-flex justify-content-between align-content-center">
                    <a href="{{ route('user') }}"><h4 class="text-link-dark">Volver</h4></a>
                    <a href="{{ route('user') }}"><h4 class="text-link-dark">Guardar</h4></a>
                </div>
           </div>
         </form>
      </div>
    </div>
  </div>
</div>

 --}}