<x-admin>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <x-admin-sidebar/>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <x-admin-nav/>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
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
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <x-footer/>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
</x-admin>
