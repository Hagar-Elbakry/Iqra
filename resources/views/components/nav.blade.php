<div id="header-wrap">

    <div class="top-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="right-element">
                        <a href="#" class="user-account for-buy"><i
                                class="icon icon-user"></i><span>Account</span></a>
                        <a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0
									$)</span></a>


                    </div><!--top-right-->
                </div>

            </div>
        </div>
    </div><!--top-content-->

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
