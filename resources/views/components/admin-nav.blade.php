<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini text-decoration-none" href="index.html" style="color: white;">BOOKSAW</a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
                <ul class="navbar-nav w-100">
    <li class="nav-item w-100">
        <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search"
                method="post" action="{{ route('admin.students.search') }}"
                style="display: flex; width: 100%;">
                @csrf
                <input type="text" name="id" class="form-control"
                    placeholder="Search Students" required>
                @error('id')
                    <script>
                        Swal.fire({
                            icon: 'error',
                            text: '{{ $message }}',
                            showConfirmButton: true,
                            timer: 4000,
                            timerProgressBar: true,
                            width: '300px'
                        });
                    </script>
                @enderror
                <button type="submit" class="btn btn-primary" style="margin-left: -1px;">
                    <i class="mdi mdi-magnify"></i>
                </button>
        </form>
    </li>
</ul>

            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                        <img class="img-xs rounded-circle" src="{{asset('assets/dashboard/images/faces/face15.jpg')}}" alt="">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::guard('admin')->user()->name }}</p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <div class="dropdown-divider"></div>

                    <a href="" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8
                                            m8-7a7 7 0 0 0-5.468 11.37
                                            C3.242 11.226 4.805 10 8 10
                                            s4.757 1.225 5.468 2.37
                                            A7 7 0 0 0 8 1"/>
                                </svg>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Profile</p>
                        </div>
                    </a>

                    <div class="dropdown-divider"></div>

                    <form method="POST" action="/logout/admin">
                        @csrf
                        <button type="submit" class="dropdown-item preview-item"
                                style="all:unset ; cursor: pointer; display: flex; align-items: center; width: 100%;">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-logout text-danger"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Log out</p>
                            </div>
                        </button>
                    </form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>
