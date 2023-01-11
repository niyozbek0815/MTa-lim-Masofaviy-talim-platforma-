@extends('layouts.app-pages')
@section('content')
<div class="profil-hero-area">
    <div class="profil-hero-fon">
        <img src="{{ asset("assets/img/shape/shape-1.png") }}" alt="">
        <img src="{{ asset("assets/img/shape/shape-6.png") }}" alt="">
        <img src="{{ asset("assets/img/shape/shape-3.png") }}" alt="">
        <img src="{{ asset("assets/img/shape/shape-4.png") }}" alt="">
    </div>
    <div class="site-container">
        <div class="profil-area">
            <div class="profil-img"><img src="{{ asset("assets/img/user/01.png") }}" alt=""></div>
            <div class="profil-text">
                <h4>Maxammadjonov Niyozbek </h4>
                <div class="profil-date">
                    <div class="uroven">3-kurs At-35 guruh</div>
                    <div class="group"></div>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="profil-menu-area ">
    <h4 class="profil-text">
        Lorem, ipsum <span>dolor</span> .
    </h4>
    <div class="site-container">
        <a href="#" class="profil-settings-box settings-color-1">
            <div class="settings-left"><i class="fas fa-calendar-alt settings-text-1"></i></div>
            <p>Kalendar</p>
        </a>
        <a href="#" class="profil-settings-box settings-color-2">
            <div class="settings-left"><i class="fas fa-calendar-alt settings-text-2"></i></div>
            <p>Edit Profil</p>
        </a>
        <a href="#" class="profil-settings-box settings-color-3">
            <div class="settings-left"><i class="fas fa-calendar-alt settings-text-3"></i></div>
            <p>Baxolar</p>
        </a>
        <a href="#" class="profil-settings-box settings-color-4">
            <div class="settings-left"><i class="fas fa-calendar-alt settings-text-4"></i></div>
            <p>Settings</p>
        </a>
        <a href="#" class="profil-settings-box settings-color-5">
            <div class="settings-left"><i class="fas fa-calendar-alt settings-text-5"></i></div>
            <p>Davomat</p>
        </a>
        <a href="#" class="profil-settings-box  settings-color-6">
            <div class="settings-left"><i class="fas fa-calendar-alt settings-text-6"></i></div>
            <p>Messages</p>
        </a>
        <a href="#" class="profil-settings-box  settings-color-7">
            <div class="settings-left"><i class="fas fa-calendar-alt settings-text-7"></i></div>
            <p>Logout</p>
        </a>
        <a href="#" class="profil-settings-box  settings-color-8">
            <div class="settings-left"><i class="fas fa-calendar-alt settings-text-8"></i></div>
            <p>Lorem, ipsum dolor ipsum dolor.</p>
        </a>
        <a href="#" class="profil-settings-box settings-color-1">
            <div class="settings-left"><i class="fas fa-calendar-alt settings-text-1"></i></div>
            <p>Lorem, ipsum dolor ipsum dolor.</p>
        </a>
        <a href="#" class="profil-settings-box settings-color-2">
            <div class="settings-left"><i class="fas fa-calendar-alt settings-text-2"></i></div>
            <p>Lorem, ipsum dolor ipsum dolor.</p>
        </a>
        <a href="#" class="profil-settings-box settings-color-3">
            <div class="settings-left"><i class="fas fa-calendar-alt settings-text-3"></i></div>
            <p>Lorem, ipsum dolor ipsum dolor.</p>
        </a>
        <a href="#" class="profil-settings-box settings-color-4">
            <div class="settings-left"><i class="fas fa-calendar-alt settings-text-4"></i></div>
            <p>Lorem, ipsum dolor ipsum dolor.</p>
        </a>


    </div>
</div>
<div class="site-container cources-area">
    <h4>My<span> Cources</span></h4>
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
