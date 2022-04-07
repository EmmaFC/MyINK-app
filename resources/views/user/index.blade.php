{{-- LISTADO USUARIOS --}}
@extends('layouts.app')
@section('content')

  <div class="col-12">
   
    <a href=" {{ url('/user/'.$user->id.'/create') }} "><button type="submit" class="btn btn-primary" name="add_user" label="add_user">Añadir usuario</button></a>
    <a href=""><button type="submit" class="btn btn-primary" name="add_category" label="add_category">Volver al Panel de Control</button></a>

    <table class="table table-bordered">

        <thead>
           <tr>
              <th scope="col">Imagen de perfil</th>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Description</th>
              <th scope="col">Rol</th>
           </tr>
        </thead>
 
        <tbody>
            @foreach ($users as $user)
           <tr>
              <td><img src=" {{ asset('storage').'/'.$user->cover }} " alt=" {{ $user->title }} user cover"></td>
              <th scope="row">{{ $user->id }} </th>
              <td> {{ $user->title }} </td>
              <td> {{ $user->description }} </td>
              <td> descomentar rol {{--  {{ $user->roles()->first()->name }} --}} </td>
              <td><a href=" {{ url('/user/'.$user->id.'/edit') }} "><button class="btn btn-success" name="edit_user" label="edit_user" type="submit">Edit</button></a></td>
              <td>
                 <form action="{{ url('/user/'.$user->id) }}" method="post"></form>
                 @csrf
                 {{ method_field('DELETE') }}
                 <a href="#"><button class="btn btn-danger" name="delete_user" label="delete_user" type="submit" onclick="return confirm('¿Estás seguro de que quieres borrar este libro?')">Delete</button></a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
  </div>

@endsection
