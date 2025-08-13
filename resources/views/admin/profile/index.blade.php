<x-admin>

    @session('status')
                                <script>
                                            Swal.fire({
                                    icon: 'success',
                                    text: '{{ session('status') }}',
                                    showConfirmButton: true,
                                    timer: 4000,
                                    timerProgressBar: true,
                                    width: '500px'
                                });
                                </script>
    @endsession
<div class="card-body">
                    <h4 class="card-title">Profile</h4>
                    <p class="card-description"> Update your profile </p>
                        <form class="forms-sample" method="post" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="exampleInputUsername1">Image</label><br>
                                @if($admin->avatar)
                                <img src="{{ asset('storage/' . $admin->avatar) }}" width="100" height="100" class="rounded-circle"><br>
                                <input type="checkbox" name="remove_avatar" value="1">
                                <label for="remove_avatar" style="padding-top: 4px">Remove current image</label>
                                @else
                                <img src="{{ asset('assets/images/default-avatar.jpg') }}" width="100" height="100" class="rounded-circle">
                                @endif
                                <input type="file" name="avatar" class="form-control" id="exampleInputUsername1" placeholder="image">
                                @error('avatar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Username</label>
                                <input type="text" name="name" class="form-control" id="exampleInputUsername1" value="{{ $admin->name }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $admin->email }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark">Cancel</a>

                        </form>
</div>
<hr>
<div class="card-body">
                    <p class="card-description">change your password</p>
                    <form class="forms-sample" method="post" action="{{ route('admin.password.update') }}">
                        @csrf
                        @method('put')
                    <div class="form-group">
                        <label for="exampleInputPassword1">Current Password</label>
                        <input type="password" name="current_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        @error('current_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-dark">Cancel</a>
                    </form>
                </div>


</x-admin>
