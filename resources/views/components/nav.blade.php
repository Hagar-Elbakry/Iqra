<div id="header-wrap">

    

    <header id="header">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-2">
                    <div class="main-logo">
                        <a href="index.html"><img src="assets/images/main-logo.png" alt="logo"></a>
                    </div>

                </div>

                <div class="col-md-10">

                    <nav id="navbar">
                        <div class="main-menu stellarnav">
                            <ul class="menu-list">
                                <li class="{{request()->is('/') ? 'active' : ''}} menu-item"><a href="/">Home</a></li>
                                <li class="menu-item has-sub">
                                    <a href="#pages" class="nav-link">Categories</a>
                                    <ul>
                                        <li class="active"><a href="index.html">All Genre</a></li>
                                        <li><a href="index.html">Business</a></li>
                                        <li><a href="index.html">Technology</a></li>
                                        <li><a href="index.html">Romantic</a></li>
                                        <li><a href="index.html">Adventure</a></li>
                                        <li><a href="index.html">Fictional</a></li>
                                    </ul>
                                </li>
                                <li class="{{request()->is('dashboard') ? 'active' : ''}} menu-item"><a href="/dashboard">Dashboard</a></li>
                                @auth
                                <li class="menu-item has-sub">
                                    <a href="#pages" class="nav-link">{{ Auth::user()->name }}</a>
                                    <ul>
                                        <li class="active"><a href="{{ route('profile.edit') }}">Profile</a></li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="post" style="display: inline-block;">
                                                @csrf
                                                <button type="submit" style="background:none; border:none; padding:0; margin:0; color:inherit; font:inherit; cursor:pointer;padding-left:15px;">Logout</button">
                                            </form>
                                        </li>
                                        
                                    </ul>
                                </li>
                                
                                @endauth
                                @guest
                                        <li class="menu-item"><a href="{{ route('login') }}" class="user-account for-buy"><span>Login</span></a></li>
                                        <li class="menu-item"><a href="{{ route('register') }}" class="user-account for-buy"><span>Register</span></a></li>
                                @endguest
                            </ul>

                            <div class="hamburger">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>

                        </div>
                    </nav>

                </div>

            </div>
        </div>
    </header>

</div><!--header-wrap-->
