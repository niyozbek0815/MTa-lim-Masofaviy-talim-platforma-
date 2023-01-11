@extends('layouts.app-pages')
@section('content')
<div class="hero-area">
    <div class="hero-fon">
        <img src="{{ asset("assets/img/shape/shape-1.png") }}" alt="">
        <img src="{{ asset("assets/img/shape/shape-6.png") }}" alt="">
        <img src="{{ asset("assets/img/shape/shape-3.png") }}" alt="">
        <img src="{{ asset("assets/img/shape/shape-4.png") }}" alt="">
    </div>
    <div class="site-container">
        <div class="hero-text">
            <h6 class="animate__animated animate__bounceInDown infinite"
                style="animation-duration:1s; animation-delay:1s; ">Informatika va Axborot tizimlari</h6>
            <h4 class="show-name animate__animated animate__fadeInUp infinite"
                style="animation-duration:1s; animation-delay:1s; ">Toshkent Davlat <span>Transport</span> Unversiteti
                Masofaviy ta'lim tizimi</h4>
            <h4 class="hidden-name animate__animated animate__fadeInUp infinite"
                style="animation-duration:1s; animation-delay:1s; "><span>TDTrU</span>Masofaviy ta'lim tizimi</h4>

            <a href="#" class="site-btn hidden-name animate__animated animate__fadeInUp infinite"
                style="animation-duration:1s; animation-delay:1s; ">Sign-in</a>

        </div>
        <div class="hero-img " style="background-image: url({{ asset("assets/img/hero/hero.jpg") }});">
        </div>
    </div>
</div>
<div class="site-container cources-area">
    <h4>Explore Our <span> Cources</span></h4>
    <div class="cources-filter ">

        <div class="search-cource1">
            <input type="search" placeholder="Search cources" class="form-control " id="validationTooltip01 " required>
        </div>
        <div class="form-cources">
            <div class="">
                <select class="custom-select form-control" id="validationTooltip04" required>
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                </select>
            </div>
            <div>
                <select class="custom-select form-control" id="validationTooltip04" required>
                    <option selected disabled value="">All cources</option>
                    <option>free</option>
                    <option>premmum</option>
                </select>
            </div>
            <div>
                <select class="custom-select form-control" id="validationTooltip04" required>
                    <option>Nomi</option>
                    <option>sana</option>
                    <option>yulduzcha</option>
                </select>
            </div>
        </div>


    </div>
    <div class="cources-section ">
        <div class="cource-box ">
            <div class="img ">
                <img src="{{ asset("assets/img/course/01.jpg") }} " alt=" ">
                <a href="# " class="cource-star narx-color-1 "><i class="far fa-heart "></i></a>
            </div>
            <div class="cource-text ">
                <div class="cource-top-text ">
                    <div class="group cource-color-1 ">
                        <p>AT-35-34-35a</p>
                    </div>
                    <div class="stars ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i> (40)
                    </div>
                </div>
                <a href="# " class="link ">
                    Lorem ipsum dolor sit amet consectetur adipisicing.
                </a>
                <hr>
                <div class="cource-teacher ">
                    <div class="teacher-profil ">
                        <a href="# ">
                            <img src="{{ asset("assets/img/user/01.png ") }}" alt=" "> Niyozbek
                        </a>
                    </div>
                    <div class="narx narx-color-1 ">$150</div>
                </div>
            </div>
        </div>
        <div class="cource-box ">
            <div class="img ">
                <img src="assets/img/course/01.jpg " alt=" ">
                <a href="# " class="cource-star narx-color-2 "> <i class="fas fa-heart "></i></a>
            </div>
            <div class="cource-text ">
                <div class="cource-top-text ">
                    <div class="group cource-color-2 ">
                        <p>AT-35-34-35a</p>
                    </div>
                    <div class="stars ">
                        <i class="fa fa-star active "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i> (40)
                    </div>
                </div>
                <a href="# " class="link ">
                    Lorem ipsum dolor sit amet consectetur adipisicing.
                </a>
                <hr>
                <div class="cource-teacher ">
                    <div class="teacher-profil ">
                        <a href="# ">
                            <img src="assets/img/user/01.png " alt=" "> Niyozbek
                        </a>
                    </div>
                    <div class="narx narx-color-2 ">$150</div>
                </div>
            </div>
        </div>
        <div class="cource-box ">
            <div class="img ">
                <img src="assets/img/course/01.jpg " alt=" ">
                <a href="# " class="cource-star narx-color-3 "> <i class="fa fa-star "></i></a>
            </div>
            <div class="cource-text ">
                <div class="cource-top-text ">
                    <div class="group cource-color-3 ">
                        <p>AT-35-34-35a</p>
                    </div>
                    <div class="stars ">
                        <i class="fa fa-star active "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i> (40)
                    </div>
                </div>
                <a href="# " class="link ">
                    Lorem ipsum dolor sit amet consectetur adipisicing.
                </a>
                <hr>
                <div class="cource-teacher ">
                    <div class="teacher-profil ">
                        <a href="# ">
                            <img src="assets/img/user/01.png " alt=" "> Niyozbek
                        </a>
                    </div>
                    <div class="narx narx-color-3 ">$150</div>
                </div>
            </div>
        </div>
        <div class="cource-box ">
            <div class="img ">
                <img src="assets/img/course/01.jpg " alt=" ">
                <a href="# " class="cource-star narx-color-1 "><i class="far fa-heart "></i></a>
            </div>
            <div class="cource-text ">
                <div class="cource-top-text ">
                    <div class="group cource-color-1 ">
                        <p>AT-35-34-35a</p>
                    </div>
                    <div class="stars ">
                        <i class="fa fa-star active "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i> (40)
                    </div>
                </div>
                <a href="# " class="link ">
                    Lorem ipsum dolor sit amet consectetur adipisicing.
                </a>
                <hr>
                <div class="cource-teacher ">
                    <div class="teacher-profil ">
                        <a href="# ">
                            <img src="assets/img/user/01.png " alt=" "> Niyozbek
                        </a>
                    </div>
                    <div class="narx narx-color-1 ">$150</div>
                </div>
            </div>
        </div>
        <div class="cource-box ">
            <div class="img ">
                <img src="assets/img/course/01.jpg " alt=" ">
                <a href="# " class="cource-star narx-color-2 "> <i class="fas fa-heart "></i></a>
            </div>
            <div class="cource-text ">
                <div class="cource-top-text ">
                    <div class="group cource-color-2 ">
                        <p>AT-35-34-35a</p>
                    </div>
                    <div class="stars ">
                        <i class="fa fa-star active "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i> (40)
                    </div>
                </div>
                <a href="# " class="link ">
                    Lorem ipsum dolor sit amet consectetur adipisicing.
                </a>
                <hr>
                <div class="cource-teacher ">
                    <div class="teacher-profil ">
                        <a href="# ">
                            <img src="assets/img/user/01.png " alt=" "> Niyozbek
                        </a>
                    </div>
                    <div class="narx narx-color-2 ">$150</div>
                </div>
            </div>
        </div>
        <div class="cource-box ">
            <div class="img ">
                <img src="assets/img/course/01.jpg " alt=" ">
                <a href="# " class="cource-star narx-color-3 "> <i class="fa fa-star "></i></a>
            </div>
            <div class="cource-text ">
                <div class="cource-top-text ">
                    <div class="group cource-color-3 ">
                        <p>AT-35-34-35a</p>
                    </div>
                    <div class="stars ">
                        <i class="fa fa-star active "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i> (40)
                    </div>
                </div>
                <a href="# " class="link ">
                    Lorem ipsum dolor sit amet consectetur adipisicing.
                </a>
                <hr>
                <div class="cource-teacher ">
                    <div class="teacher-profil ">
                        <a href="# ">
                            <img src="assets/img/user/01.png " alt=" "> Niyozbek
                        </a>
                    </div>
                    <div class="narx narx-color-3 ">$150</div>
                </div>
            </div>
        </div>
    </div>
    <div class="cource-load ">
        <div class="site-btn "><i class="far fa-sync-alt "></i> Browse All Cources</div>
    </div>
</div>
@endsection('content')
