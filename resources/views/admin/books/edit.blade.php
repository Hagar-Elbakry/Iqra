<x-admin>

    <div class="col-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="divergent">
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" class="form-control" name="author" placeholder="Author" value="four">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" placeholder="Quantity" value="3">
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" name="description" rows="4">bla bla bla</textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                            <button class="btn btn-dark">Cancel</button>
                        </div>
                        <div>
                            <button class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-admin>
