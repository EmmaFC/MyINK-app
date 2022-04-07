{{-- FORMULARIO EDICIÓN CATEGORÍA --}}

@extends('layouts.app-dark')
@section('content')

<div class="column container-second">
  <div class="d-flex justify-content-start"><h1 class="section-title-dark">{{ __('Editar Links de Contacto') }}</h1></div>
    <div class="box">
      <div  class="card-box column"> 

        <form action="{{ url('/contactlink/'.$contactlink->id) }}" method="post" enctype="multipart/form-data"{{-- archivos tipo img --}}>
          @csrf
          {{ method_field('PATCH') }}
          @include('livewire.contactlinks.form');
        </form>

      </div>
    </div>
  </div>
</div>

@endsection