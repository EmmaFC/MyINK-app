{{--   
    @extends('layouts.app')

    @section('content')

    
        
            <div class="row justify-content-ce
nter">
     <div class="col-12">

             <a href=" {{ url('/user') }} "><button type="submit" class="btn btn-primary" name="add_book" label="add_book">Administrar Usuarios</button></a>
             <a href=" {{ url('/category') }} "><button type="submit" class="btn btn-primary" name="add_category" label="add_category">Administrar Categorías</button></a>
             <a href=" {{ url('/book/'.$book->id.'/create') }} "><button type="submit" class="btn btn-primary" name="add_book" label="add_book">Añadir Book</button></a>
        
                <table class="table table-bordered">

                  @csrf
                  {{ method_field('PATCH') }}
                  @include('book.index')

                </table>
                

        </div>


    @endsection
 --}}