{{-- LISTADO BOOK --}}
{{-- @extends('layouts.app')--}}
{{-- @section('content') --}}

  <div class="col-12">
    
     <a href="#"><button type="submit" class="btn" name="add_book" label="add_book">Administrar Usuarios</button></a>
     <a href="#"><button type="submit" class="btn" name="add_category" label="add_category">Administrar Categorías</button></a>
     {{-- <a href="#"><button type="submit" class="btn" name="add_book" label="add_book">Añadir Book</button></a> --}}
      <a href=" {{ route('book.create') }}"><button class="btn" name="edit_book" label="edit_book" type="submit">Añadir Libro</button></a>

     <input type="text" wire:model="search_key" class="input">

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
               {{-- <td><img src=" {{ asset('storage').'/'.$book->cover }} " alt=" {{ $book->title }} book cover"></td> --}}
               <td> <img src="{{ $book->cover }}" alt="{{ $book->title }} book cover"></td>
               <th scope="row"> {{ $book->id }} </th>
               <td> {{ $book->title }} </td>
               <td> {{ $book->description }} </td>
               <td> <a href=" {{ route('book.edit', ['book' => $book]) }} "><button class="btn" name="edit_book" label="edit_book" type="submit">Edit</button></a></td>
               <td>
                  <form action="{{ route('book.destroy', ['book' => $book->id]) }}" method="post"></form>
                  @csrf  {{ method_field('DELETE') }}
                  <button class="btn" name="delete_book" label="delete_book" type="submit" onclick="return confirm('¿Estás seguro de que quieres borrar este libro?')">Delete</button>
                  
               </td>
             </tr>
             @endforeach
         </tbody>
    </table>
   
  {{--   </div> --}}
 
 {{-- @endsection --}}
 {{-- <thead>
                       <tr>
                         <th scope="col">#</th>
                         <th scope="col">Book Cover</th>
                         <th scope="col">Title</th>
                         <th scope="col">Description</th>
                       </tr>
                     </thead>
                     <tbody>
                     @foreach ($books as $book)
                         <tr>
                             <th scope="row">{{ $book->id }}</th>
                             <td><img src="{{ $book->cover }}" alt="{{ $book->title }} book cover"></td>
                             <td>{{ $book->title }}</td>
                             <td>{{ $book->description }}</td>
                             <td><a href="#"><button class="btn btn-success" name="edit_book" label="edit_book" type="submit">Edit</button></a></td>
                             <td><a href="#"><button class="btn btn-danger" name="delete_book" label="delete_book" type="submit">Delete</button></a></td>
                         </tr>
                     @endforeach
                     </tbody> --}}
