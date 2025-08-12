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
                                    <input type="text" disabled value="{{ $user->name }}" class="form-control" style="color: black"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email" disabled value="{{ $user->email }}" class="form-control" style="color: black"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email Verified At</label>
                                <div class="col-sm-9">
                                    <input type="email" disabled value="{{ $user->email_verified_at ?? '-' }}" class="form-control" style="color: black"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Created At</label>
                                <div class="col-sm-9">
                                    <input type="email" disabled value="{{ $user->created_at->format('d-m-Y') }}" class="form-control" style="color: black"/>
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
                            @foreach($user->books as $book)
                            <tr>
                                <td> {{ $book->title }} </td>
                                <td> {{ $book->category->name }} </td>
                                <td>{{ \Carbon\Carbon::parse($book->pivot->borrow_date)->format('M d, Y') }} </td>
                                <td> {{ \Carbon\Carbon::parse($book->pivot->return_date)->format('M d, Y') }} </td>
                                <td>
                                                <div class="badge {{ $book->pivot->is_returned ? 'badge-outline-success' : 'badge-outline-danger' }}">
                                                    {{ $book->pivot->is_returned ? 'Yes' : 'No' }}
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
