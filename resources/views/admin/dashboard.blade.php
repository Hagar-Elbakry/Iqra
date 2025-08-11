<x-admin>

    <div class="row">
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Students</h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Number of Students</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Books</h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Number of Books</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Borrowed Books</h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-danger">
                                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Number of borrowed books</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Students</h4>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th> # </th>
                            <th>Avatar</th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Created At </th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> 1 </td>
                            <td><img src="{{asset('assets/dashboard/images/faces-clipart/pic-1.png')}}" alt="image" /></td>
                            <td> Herman Beck </td>
                            <td> h@gmail.com </td>
                            <td> May 15, 2015 </td>
                            <td> May 15, 2015 </td>
                            <td>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <a href="/admin/students/1" style="display: inline-flex; align-items: center; gap: 5px">
                                        <i class="mdi mdi-eye"></i>  View</a>
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
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Borrowed Books</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th> Client Name </th>
                                <th> Book Title</th>
                                <th> Category </th>
                                <th> Borrow Date </th>
                                <th> Return Date </th>
                                <th> Is Returned </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <img src="{{asset('assets/dashboard/images/faces/face1.jpg')}}" alt="image" />
                                    <span class="pl-2">Henry Klein</span>
                                </td>
                                <td> Divergent </td>
                                <td> Drama </td>
                                <td> 04 Dec 2019 </td>
                                <td> 04 Dec 2019 </td>
                                <td>
                                    <div class="badge badge-outline-success">Yes</div>
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
