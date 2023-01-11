<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset("assets/img/logo/logo-white.png") }}">
    <title>MTa'lim</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("assets/css/animate.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/all-fontawesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}">
</head>

<body>

    <div class="search-area">
        <div class="search-hidden">
            <div class="site-btn search-show wow animate__animated animate__tada" id="search-btn" style="animation-duration:1s; animation-delay:0.5s; ">
                <i class="far fa-times"></i>
            </div>
            <form action="#" class="animate__animated animate__bounceInLeft infinite" style="animation-duration:1s; animation-delay:0.5s; ">

                <input type="search" placeholder="Search Here..." class=" search-input form-control">

                <button type="submit" class="site-btn ">
                <i class='far fa-search'></i>
            </button>


            </form>
        </div>
    </div>
    <navbar>
        <div class="site-container">
            <div class="nav">
                <a href="{{ url("/") }}" class="navbar-left ">
                    <img src="{{ asset("assets/img/logo/logo.png") }}" alt="" class="navbar-logo ">
                    <span>M</span>
                    <p>Ta'lim</p>
                </a>
                <div class="navbar-link" id="lll">
                    <div>
                        <a href="{{ url("/") }}" class="navbar-item"><i class="far fa-home"></i>Home</a>
                        <a href="{{ url("/student-profil") }}" class="navbar-item"><i class="far fa-newspaper"></i>Student-profil</a>
                        <a href="{{ url("/teacher-profil") }}" class="navbar-item"><i class="far fa-newspaper"></i>Teacher-profil</a>

                        <a href="{{ url("/search-cources") }}" class="navbar-item"><i class="far fa-books"></i>Search-cources</a>
                        <a href="{{ url("/cource-single") }}" class="navbar-item"><i class="far fa-book-open"></i>Cource-single</a>
                    </div>
                </div>
                <div class="navbar-right">
                    <div class="navbar-item search-show" id="search-btn">
                        <i class="far fa-search"></i>
                    </div>



                    @guest

                    @if (Route::has('login'))

                    <div class="site-btn sign-in">
                        <a href="{{ route('login') }}"><i class="far fa-sign-in"></i><p>Sign-in</p></a>
                    </div>
                    @endif
                @else
                <div class="navbar-item  message">
                    <i class="fas fa-comment-lines"></i>
                    <span>12</span>
                </div>
                <div class="navbar-item dropdown">

                    <a class="user_name dropdown-toggle " href="#" data-bs-toggle="dropdown">
                        <img class="img" src="{{ asset("assets/img/user/01.png") }}">

                        <h6>
                            {{ Auth::user()->name }}
                        </h6>
                    </a>
                    <ul class="dropdown-menu fade-up">
                        <li><a class="dropdown-item" href="/instructor-single">Profil</a>
                        </li>
                        <li><a class="dropdown-item" href="/student-single">Profil</a>
                        </li>
                        <li><a class="dropdown-item" href="/adminpanel">Adminpanel</a>
                        </li>
                        <li><a class="dropdown-item" href="/user/edit">Profile
                                Settings</a></li>

                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>


                        </li>
                    </ul>
                </div>

                @endguest
                    <div class="menu navbar-item">
                        <i class="far fa-bars"></i>
                    </div>
                </div>
            </div>

        </div>
    </navbar>
    <div class="main">
        @yield("content")

    </div>
    <footer>
        <div class="site-container">
            <div class="footer-left">
                <div class="header-logo">
                    <img src="{{ asset("assets/img/logo/logo-white.png") }}" alt="" class="logo ">
                    <span>M</span>
                    <p>Ta'lim</p>
                </div>
                <div class="footer-text">
                    <h5>Masofaviy ta'lim platformasi</h5>
                    <div class="footer-social">
                        <a href="#"> <i class="fab fa-telegram-plane"></i>
                        </a>
                        <a href="#"> <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"> <i class="fab fa-instagram-square"></i>
                        </a>
                        <a href="#"> <i class="fas fa-phone"></i>
                        </a>
                        <a href="#"> <i class="far fa-globe-americas"></i>
                        </a>

                    </div>
                </div>
            </div>
            <div class="footer-right">
                <h5>TDTrU Informatika va axborot texnologiyalari Kafedrasi</h5>
                <div class="footer-links">
                    <a href="#">Home</a>
                    <a href="#">Dashboard</a>
                    <a href="#">My Cources</a>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset("assets/js/jquery-3.6.0.min.js") }} "></script>
    <script src="{{ asset("assets/js/bootstrap.bundle.min.js ") }}"></script>
    <script src="{{ asset("assets/js/wow.min.js") }} "></script>
    <script src="{{ asset("assets/js/main.js") }} "></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
