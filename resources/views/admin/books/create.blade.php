<x-admin>

    <div class="col-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{route('admin.books.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                        @error('title')
                        <div class="mt-2">
                            <p class="text-sm text-danger">{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" class="form-control" name="author" placeholder="Author">
                        @error('author')
                        <div class="mt-2">
                            <p class="text-sm text-danger">{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" placeholder="Quantity">
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
                                <option value="{{$category->id}}">{{$category->name}}</option>
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
                            <input class="file-upload-browse btn btn-primary" type="file" name="image">
                          </span>
                        </div>
                        @error('image')
                        <div class="mt-2">
                            <p class="text-sm text-danger">{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" name="description" rows="4"></textarea>
                        @error('description')
                        <div class="mt-2">
                            <p class="text-sm text-danger">{{$message}}</p>
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>

</x-admin>
