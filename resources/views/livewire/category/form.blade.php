{{-- FORMULARIO CON DATOS EN COMÚN CON CREATE Y EDIT --}}

<div class="column container-second">
    <div class="d-flex justify-content-start"><h1 class="section-title-dark">{{ __('Form Categoría') }}</h1></div>
      <div class="box">
        <div  class="card-box column"> 
            <form action="{{ url('/category') }}" method="post" enctype="multipart/form-data"{{-- archivos tipo img --}}>
              @csrf
  
              <div class="container-second">
                  <div class="container-second">
  
                      <input id="name" class="input-dark" type="text" name="name" value="{{ isset($category->name)? $category->name : ''  }}" placeholder="{{ __('nombre') }}" @error('name') is-invalid @enderror" required autocomplete="current-name">
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
  
                  </div>
                  <div class="container-second mt-4 mb-4 d-flex justify-content-between align-content-center">
                      <a href="{{ route('category') }}"><h4 class="text-link-dark">Volver</h4></a>
                      <a href="{{ route('category') }}"><h4 class="text-link-dark">Guardar</h4></a>
                  </div>
             </div>
           </form>
        </div>
      </div>
    </div>
  </div>
  
  