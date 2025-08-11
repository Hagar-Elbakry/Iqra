<x-admin>

    <div class="row">
        <div class="col-12 grid-margin mt-5">
            <div class="card">
                <div class="card-body">
                    <p class="card-description"> Personal info </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" disabled value="Hagar" class="form-control" style="color: black"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email" disabled value="hagar@gmail.com" class="form-control" style="color: black"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email Verified At</label>
                                <div class="col-sm-9">
                                    <input type="email" disabled value="05-04-2000" class="form-control" style="color: black"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Created At</label>
                                <div class="col-sm-9">
                                    <input type="email" disabled value="05-04-2000" class="form-control" style="color: black"/>
                                </div>
                            </div>
                        </div>
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
                                <th> Book Title</th>
                                <th> Category </th>
                                <th> Borrow Date </th>
                                <th> Return Date </th>
                                <th> Is Returned </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
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
