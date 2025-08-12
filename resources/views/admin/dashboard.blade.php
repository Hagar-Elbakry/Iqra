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
                            <th class="text-center"> # </th>
                            <th class="text-center">Avatar</th>
                            <th class="text-center"> Name </th>
                            <th class="text-center"> Email </th>
                            <th class="text-center"> Created At </th>
                            <th class="text-center">Updated At</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-center"> {{ $user->id }} </td>
                            @if($user->avatar)
                            <td class="text-center"><img src="{{asset('storage/'.$user->avatar)}}" alt="image" /></td>
                            @else
                            <td class="text-center">-</td>
                            @endif
                            <td class="text-center"> {{ $user->name }} </td>
                            <td class="text-center"> {{ $user->email }} </td>
                            <td class="text-center"> {{ $user->created_at->format('M d, Y') }} </td>
                            <td class="text-center"> {{ $user->updated_at->format('M d, Y') }} </td>
                            <td class="text-center">
                                <a href="{{ route('admin.student', $user->id) }}" style="display: inline-flex; align-items: center; gap: 5px;">
                                    <i class="mdi mdi-eye"></i> View
                                </a>
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
                                <th class="text-center"> Is Returned </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($borrowedBooks as $user)
                                @if($user->books->isNotEmpty())
                                    @foreach($user->books as $book)
                                        <tr>
                                            <td>
                                                @if($user->avatar)
                                                <img src="{{ asset('storage/'.$user->avatar) }}" alt="image" />
                                                @endif
                                                <span class="pl-2">{{ $user->name }}</span>
                                            </td>
                                            <td>{{ $book->title }}</td>
                                            <td>{{ $book->category->name ?? 'N/A' }}</td>
                                            <td>{{ \Carbon\Carbon::parse($book->pivot->borrow_date)->format('M d, Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($book->pivot->return_date)->format('M d, Y') }}</td>
                                            <td class="text-center">
                                                <div class="badge {{ $book->pivot->is_returned ? 'badge-outline-success' : 'badge-outline-danger' }}">
                                                    {{ $book->pivot->is_returned ? 'Yes' : 'No' }}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin>
