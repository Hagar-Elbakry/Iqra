<x-admin>

    <div class="row">
        <div class="pl-3">
            <a href="/admin/books/create">Add New Book</a>
        </div>
        <div class="col-lg-12 grid-margin stretch-card mt-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Books</h4>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th> # </th>
                                <th>Title</th>
                                <th> Image </th>
                                <th>Author</th>
                                <th> Quantity </th>
                                <th> Created At </th>
                                <th>Updated At</th>
                                <th style="padding-left: 50px">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td> {{$book->id}} </td>
                                <td> {{$book->title}} </td>
                                <td><img src="{{asset('storage/'.$book->image)}}" alt="image" /></td>
                                <td>{{$book->author}}</td>
                                <td>{{$book->quantity}}</td>
                                <td> {{$book->created_at}} </td>
                                <td> {{$book->updated_at}} </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('admin.books.edit', $book)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                        <form action="{{route('admin.books.destroy', $book)}}" method="POST" id="delete_book">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm ml-2" form="delete_book">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin>
