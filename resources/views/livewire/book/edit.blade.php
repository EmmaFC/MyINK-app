{{-- FORMULARIO EDICIÓN BOOK --}}

@extends('layouts.app-dark')
@section('content')

<div class="column container-second">
  <div class="d-flex justify-content-start"><h1 class="title-dark">{{ __('Editar Libro') }}</h1></div>
    <div class="box">

      <div  class="card-box column"> 

        <form action="{{ route('book.update', ['book' => $book]) }}" method="POST" enctype="multipart/form-data">
          @csrf
          {{ method_field('PATCH') }}
          {{-- @livewire('book.form', ['book' => $book]) --}}




          <div class="container-second">
            <div class="container-second">
                
                <div class="card">
                    @if (isset($book->cover ))
                    <img class="card-img-top" src="{{ $book->cover }}" alt="Card cover cap">
                    @else
                    <img class="card-img-top" src="https://picsum.photos/200/300" alt="Card cover cap">
                    @endif
                </div>
                

                <input id="cover" class="input-dark" type="file" name="cover" value="{{ isset($book->cover)? $book->cover : '' }}" placeholder="{{ __('imagen de portada') }}" @error('cover') is-invalid @enderror" required autocomplete="current-cover">
                @error('cover')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="title" class="input-dark" type="text" name="title" value="{{ isset($book->title)? $book->title : ''  }}" placeholder="{{ __('título') }}" @error('title') is-invalid @enderror" required autocomplete="current-title">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="author" class="input-dark" type="text" name="author" value="{{ isset($book->author)? $book->author : ''  }}" placeholder="{{ __('autor/a') }}" @error('author') is-invalid @enderror" required autocomplete="current-author">
                @error('author')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="year" class="input-dark" type="text" name="year" value="{{ isset($book->year)? $book->year : ''  }}" placeholder="{{ __('año de publicación') }}" @error('year') is-invalid @enderror" required autocomplete="current-year">
                @error('year')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <input id="genre" class="input-dark" type="text" name="genre" value="{{ isset($book->genre)? $book->genre : ''  }}" placeholder="{{ __('género') }}" @error('genre') is-invalid @enderror" required autocomplete="current-genre">
                @error('genre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="pages" class="input-dark" type="text" name="pages" value="{{ isset($book->pages)? $book->pages : ''  }}" placeholder="{{ __('páginas') }}" @error('pages') is-invalid @enderror" required autocomplete="current-pages">
                @error('pages')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="description" class="input-dark" type="text" name="description" value="{{ isset($book->description)? $book->description : ''  }}" placeholder="{{ __('descripción') }}" @error('description') is-invalid @enderror" required autocomplete="current-description">
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="collection" class="input-dark" type="text" name="collection" value="{{ isset($book->collection)? $book->collection : ''  }}"  placeholder="{{ __('colección') }}" @error('collection') is-invalid @enderror" required autocomplete="collection" autofocus>
                @error('collection')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
                <input id="publishing_house" class="input-dark" type="text" name="publishing_house" value="{{ isset($book->publishing_house)? $book->publishing_house : ''  }}" placeholder="{{ __('editorial') }}" @error('publishing_house') is-invalid @enderror" required autocomplete="current-publishing_house">
                @error('publishing_house')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="edition" class="input-dark" type="text" name="edition" value="{{ isset($book->edition)? $book->edition : ''  }}" placeholder="{{ __('edition') }}" @error('edición') is-invalid @enderror" required autocomplete="current-edition">
                @error('edition')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
            </div>
            <div class="container-second mt-4 mb-4 d-flex justify-content-between align-content-center">
                <a href="{{ route('book.index') }}"><h4 class="text-link-dark">Volver</h4></a>
                <button type="submit" class="btn"><h4 class="text-link-dark">Guardar</h4></button>
            </div>

        </div>
        </form>

      </div>
    </div>
  </div>
</div>

@endsection