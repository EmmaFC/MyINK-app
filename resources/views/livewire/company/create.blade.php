{{-- FORMULARIO CREACIÓN CATEGORÍA --}}
@extends('layouts.app-dark')
@section('content')

<div class="column container-second">
  <div class="d-flex justify-content-start"><h1 class="section-title-dark">{{ __('Añadir Compñía') }}</h1></div>
    <div class="box">

      <div  class="card-box column"> 

          <form action="{{ url('/company') }}" method="post" enctype="multipart/form-data"{{-- archivos tipo img --}}>
            @csrf
            @include('livewire.company.form');
         </form>
         
      </div>
    </div>
  </div>
</div>

@endsection
