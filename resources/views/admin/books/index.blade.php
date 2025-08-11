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
                            <tr>
                                <td> 1 </td>
                                <td> Divergent </td>
                                <td><img src="{{asset('assets/dashboard/images/faces-clipart/pic-1.png')}}" alt="image" /></td>
                                <td>Four</td>
                                <td>10</td>
                                <td> May 15, 2015 </td>
                                <td> May 15, 2015 </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/admin/books/1/edit" class="btn btn-outline-warning btn-sm">Edit</a>
                                        <form>
                                            <button type="button" class="btn btn-outline-danger btn-sm ml-2">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin>
