<x-admin>

    <div class="col-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{route('admin.books.update', $book)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{$book->title}}">
                        @error('title')
                        <div class="mt-2">
                            <p class="text-sm text-danger">{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" class="form-control" name="author" placeholder="Author" value="{{$book->author}}">
                        @error('author')
                        <div class="mt-2">
                            <p class="text-sm text-danger">{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" placeholder="Quantity" value="{{$book->quantity}}">
                        @error('quantity')
                        <div class="mt-2">
                            <p class="text-sm text-danger">{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category_id">
                            <option>Choose Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{$book->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="mt-2">
                            <p class="text-sm text-danger">{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                            <input type="file" name="image" class="file-upload-browse btn btn-primary">
                          </span>
                        </div>
                        <div>
                            <img src="{{asset('storage/'.$book->image)}}" alt="">
                        </div>
                        @error('image')
                        <div class="mt-2">
                            <p class="text-sm text-danger">{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" name="description" rows="4">{{$book->description}}</textarea>
                        @error('description')
                        <div class="mt-2">
                            <p class="text-sm text-danger">{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                            <button class="btn btn-dark">Cancel</button>
                        </div>
                        <div>
                                <button class="btn btn-danger" form="delete_book">Delete</button>
                        </div>
                    </div>
                </form>
        <form action="{{route('admin.books.destroy', $book)}}" method="POST" id="delete_book">
        @csrf
        @method('DELETE')
        </form>
            </div>
        </div>
    </div>

</x-admin>
