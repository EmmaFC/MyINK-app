{{-- FORMULARIO EDICIÓN BOOK --}}

@extends('layouts.app-dark')
@section('content')

<div class="column container-second">
  <div class="d-flex justify-content-start"><h1 class="section-title-dark">{{ __('Editar Libro') }}</h1></div>
    <div class="box">
      <div  class="card-box column"> 

        <form action="{{ route('book.update', ['book' => $book->id]) }}" method="post" enctype="multipart/form-data"{{-- archivos tipo img --}}>
          @csrf
          {{ method_field('PATCH') }}
          @include('book.form');
        </form>

      </div>
    </div>
  </div>
</div>

@endsection