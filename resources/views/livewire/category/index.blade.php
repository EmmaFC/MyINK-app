{{-- LISTADO CATEGORÍA --}}

@extends('layouts.app')
@section('content')

  <div class="col-12">
    
    {{-- <a href=" {{ url('/category/'.$category->id.'/create') }} "><button type="submit" class="btn btn-primary" name="add_category" label="add_category">Añadir Categoría</button></a> --}}
    {{-- <a href=""><button type="submit" class="btn btn-primary" name="add_category" label="add_category">Volver al Panel de Control</button></a> --}}

    <table class="table table-bordered">

        <thead>
           <tr>
              <th scope="col">#</th>
              <th scope="col">Categorías</th>
           </tr>
        </thead>
 
        <tbody>
            @foreach ($categories as $category)
           <tr>
              <th scope="row">{{ $category->id }} </th>
              <td> {{ $category->name }} </td>
              <td><a href=" {{ url('/category/'.$category->id.'/edit') }} "><button class="btn btn-success" name="edit_category" label="edit_category" type="submit">Edit</button></a></td>
              <td>
                 <form action="{{ url('/category/'.$category->id) }}" method="post"></form>
                 @csrf
                 {{ method_field('DELETE') }}
                 <a href="#"><button class="btn btn-danger" name="delete_category" label="delete_category" type="submit" onclick="return confirm('¿Estás seguro de que quieres borrar esta categoría?')">Delete</button></a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
  </div>

@endsection

