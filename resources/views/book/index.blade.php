{{-- LISTADO BOOK --}}
@extends('layouts.app')
@section('content')

  <div class="col-12">
    
    <a href=" {{ url('/book/'.$book->id.'/create') }} "><button type="submit" class="btn btn-primary" name="add_book" label="add_book">Add Book</button></a>
    <a href=""><button type="submit" class="btn btn-primary" name="add_category" label="add_category">Manage Categories</button></a>

    <table class="table table-bordered">

        <thead>
           <tr>
              <th scope="col">Book Cover</th>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
           </tr>
        </thead>
 
        <tbody>
            @foreach ($books as $book)
           <tr>
              <td><img src=" {{ asset('storage').'/'.$book->cover }} " alt=" {{ $book->title }} book cover"></td>
              <th scope="row">{{ $book->id }} </th>
              <td> {{ $book->title }} </td>
              <td> {{ $book->description }} </td>
              <td><a href=" {{ url('/book/'.$book->id.'/edit') }} "><button class="btn btn-success" name="edit_book" label="edit_book" type="submit">Edit</button></a></td>
              <td>
                 <form action="{{ url('/book/'.$book->id) }}" method="post"></form>
                 @csrf
                 {{ method_field('DELETE') }}
                 <a href="#"><button class="btn btn-danger" name="delete_book" label="delete_book" type="submit" onclick="return confirm('¿Estás seguro de que quieres borrar este libro?')">Delete</button></a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
  </div>

@endsection
