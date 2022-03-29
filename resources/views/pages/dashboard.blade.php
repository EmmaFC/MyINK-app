  
    @extends('layouts.app')

    @section('content')

        
{{--             <div class="row justify-content-center">
 --}}        <div class="col-12">
        
             <a href=""><button type="submit" class="btn btn-primary" name="add_book" label="add_book">Add Book</button></a>
             <a href=""><button type="submit" class="btn btn-primary" name="add_category" label="add_category">Manage Categories</button></a>

                <table class="table table-bordered">
                    <thead>
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
                    </tbody>
                  </table>
                 {{--  @foreach ($users as $user)
                  <div>{{ $user->name }}</div>
                  @endforeach --}}
                </div>
{{--             </div>
 --}}       

    @endsection
