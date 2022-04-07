{{-- FORMULARIO CREACIÓN CATEGORÍA --}}
@extends('layouts.app-dark')
@section('content')

<div class="column container-second">
  <div class="d-flex justify-content-start"><h1 class="section-title-dark">{{ __('Añadir Categoría') }}</h1></div>
    <div class="box">

      <div  class="card-box column"> 

          <form action="{{ url('/category') }}" method="post" enctype="multipart/form-data"{{-- archivos tipo img --}}>
            @csrf
            @include('category.form');
         </form>
         
      </div>
    </div>
  </div>
</div>

@endsection
