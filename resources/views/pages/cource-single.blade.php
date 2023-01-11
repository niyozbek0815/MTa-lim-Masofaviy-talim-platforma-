@extends('layouts.app-pages')

@section('content')
<div class="cource-single-area">
    <div class="profil-hero-fon">
        <img src="{{ asset("assets/img/shape/shape-1.png") }}" alt="">
        <img src="{{ asset("assets/img/shape/shape-6.png") }}" alt="">
        <img src="{{ asset("assets/img/shape/shape-3.png") }}" alt="">
        <img src="{{ asset("assets/img/shape/shape-4.png") }}" alt="">
    </div>
    <div class="site-container">
        <div class="profil-area">
            <div class="cources-name">
                <div class="btn">At-13-15</div>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiisnon blanditiis nisi. Ratione reprehenderit, velit dolorum saepe doloremque ex odit autem non.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <p><span>4.5</span>(1.5k sharxlar)</p>
                </div>
                <div class="teacher-profil ">
                    <a href="# ">
                        <img src="{{ asset("assets/img/user/01.png") }} " alt=" ">Maxammadjonov N.
                    </a>
                    <div class="chiziq">d</div>
                    <div class="uriven">
                        <p>Professor Datsent</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-area">
    <div class="site-container">
        <div class="left">
            <video controlsList="nodownload" preload="auto" controls poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" data-setup='' loop><source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type='video/mp4'></video>
            <img src="{{ asset("assets/img/widget/banner.jpg") }}" alt="" style="width: 100%;height:500px; display:none" class="cource-image">
            <div class="show-hide">
                <div class="box active box1">Darslar va topshiriqlar</div>
                <div class="box box2">Sharxlar</div>
            </div>
            <div class="lesson-block" id="accordion">
                <div class=" lessons-boxs ">
                    <div class="" id="headingOne">
                        <div class="lessons-top" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h6>Get started</h6>
                            <i class="far fa-sort-circle"></i>
                        </div>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="lesson-list">
                                <div class="lesson-left">
                                    <i class="far fa-file-invoice"></i>
                                    <div class="text">
                                        <h6>
                                            <span>Docx:</span>
                                        </h6>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                </div>
                                <div class="lesson-right">
                                    <p>12:46</p>
                                    <i class="far fa-download"></i>
                                </div>

                            </div>
                            <a href="#" download="" class="lesson-list">
                                <div class="lesson-left">
                                    <i class="far fa-book"></i>
                                    <div class="text">
                                        <h6>
                                            <span>Book:</span>
                                        </h6>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                </div>
                                <div class="lesson-right">
                                    <p>12:46</p>
                                    <i class="far fa-download"></i>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
                <div class=" lessons-boxs">
                    <div class="" id="headingTwo">
                        <div class="lessons-top  " data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h6>Get started</h6>
                            <i class="far fa-sort-circle"></i>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">

                            <div class="slayd-lesson ">
                                <div class="lesson-list ">
                                    <div class="lesson-left">
                                        <i class="far fa-book-reader"></i>
                                        <div class="text">
                                            <h6>
                                                <span>Lesson</span> 1</h6>
                                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        </div>
                                    </div>
                                    <div class="lesson-right">

                                        <i class="fas fa-lock-open-alt"></i>
                                    </div>
                                </div>
                                <div class="hide-block" style="display:none;">
                                    <a href="#" class="lesson-item">
                                        <div class="lesson-left">
                                            <i class="far fa-file"></i>
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="lesson-item">
                                        <div class="lesson-left">
                                            <i class="fas fa-globe"></i>
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lesson-item">
                                        <div class="lesson-left">
                                            <i class="far fa-book"></i>
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lesson-item">
                                        <div class="lesson-left">
                                            <i class="far fa-play-circle"></i>
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                            </div>

                                        </div>
                                        <div class="lesson-right">
                                            <p>12:46</p>
                                        </div>

                                    </div>
                                    <div class="lesson-item">
                                        <div class="lesson-left">
                                            <i class="far fa-ballot-check"></i>
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="slayd-lesson">
                                <div class="lesson-list">
                                    <div class="lesson-left">
                                        <i class="far fa-book-reader"></i>
                                        <div class="text">
                                            <h6>
                                                <span>Lesson</span> 1</h6>
                                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        </div>
                                    </div>
                                    <div class="lesson-right">
                                        <i class="fas fa-lock-open-alt"></i>
                                    </div>
                                </div>
                                <div class="hide-block" style="display:none;">
                                    <a href="#" class="lesson-item">
                                        <div class="lesson-left">
                                            <i class="far fa-file"></i>
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="lesson-item">
                                        <div class="lesson-left">
                                            <i class="fas fa-globe"></i>
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lesson-item">
                                        <div class="lesson-left">
                                            <i class="far fa-book"></i>
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lesson-item">
                                        <div class="lesson-left">
                                            <i class="far fa-play-circle"></i>
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                            </div>

                                        </div>
                                        <div class="lesson-right">
                                            <p>12:46</p>
                                        </div>

                                    </div>
                                    <div class="lesson-item">
                                        <div class="lesson-left">
                                            <i class="far fa-ballot-check"></i>
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div href="#" download="" class="lesson-list">
                                <div class="lesson-left">
                                    <i class="far fa-play-circle"></i>
                                    <div class="text">
                                        <h6>
                                            <span>Lesson</span> 2</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                </div>
                                <div class="lesson-right">
                                    <p>12:46</p>
                                    <i class="fas fa-lock-alt"></i>
                                </div>

                            </div>

                            <div href="#" download="" class="lesson-list">
                                <div class="lesson-left">
                                    <i class="far fa-link"></i>
                                    <div class="text">
                                        <h6>
                                            <span>Lesson</span> 2</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                </div>
                                <div class="lesson-right">
                                    <p>12:46</p>
                                    <i class="fas fa-lock-alt"></i>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class=" lessons-boxs">
                    <div class="" id="headingThree">
                        <div class="lessons-top " data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h6>Get started</h6>
                            <i class="far fa-sort-circle"></i>
                        </div>
                    </div>
                    <div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                            craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-block" style="display:none">
                <div class="review-uroven">
                    <div class="uroven-left">
                        <h2>4.5</h2>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>15.5k Students Review</p>
                    </div>
                    <div class="uroven-right">
                        <div class="foiz">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>80 %</p>
                        </div>
                        <div class="foiz">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="progress" style=" height:4px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>50 %</p>
                        </div>
                        <div class="foiz">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="progress" style="height:4px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>22 %</p>
                        </div>
                        <div class="foiz">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="progress" style="height:4px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>18 %</p>
                        </div>
                        <div class="foiz">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="progress" style="height:4px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>10 %</p>
                        </div>
                    </div>
                </div>
                <div class="reviews">
                    <h4>Reviews(1500)</h4>
                    <div class="reviews-card">
                        <div class="reviews-box">
                            <div class="user-box">
                                <img src="{{ asset("assets/img/instructor/03.jpg") }}" alt="">

                                <div class="user">
                                    <div class="name">
                                        <h6>Janna Drak</h6>
                                        <p><i class="far fa-clock"></i> 1 day ago</p>
                                    </div>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>

                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, est. Consectetur, dolorem! Qui facilis nulla blanditiis rem fuga animi doloribus dicta! Quo voluptates officiis quas soluta ea quidem, ratione laboriosam!</p>
                        </div>
                        <div class="reviews-box">
                            <div class="user-box">
                                <img src="{{ asset("assets/img/instructor/03.jpg") }}" alt="">

                                <div class="user">
                                    <div class="name">
                                        <h6>Janna Drak</h6>
                                        <p><i class="far fa-clock"></i> 1 day ago</p>
                                    </div>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>

                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, est. Consectetur, dolorem! Qui facilis nulla blanditiis rem fuga animi doloribus dicta! Quo voluptates officiis quas soluta ea quidem, ratione laboriosam!</p>
                        </div>
                        <div class="reviews-box">
                            <div class="user-box">
                                <img src="{{ asset("assets/img/instructor/03.jpg") }}" alt="">

                                <div class="user">
                                    <div class="name">
                                        <h6>Janna Drak</h6>
                                        <p><i class="far fa-clock"></i> 1 day ago</p>
                                    </div>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>

                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, est. Consectetur, dolorem! Qui facilis nulla blanditiis rem fuga animi doloribus dicta! Quo voluptates officiis quas soluta ea quidem, ratione laboriosam!</p>
                        </div>



                    </div>
                    <div class="btn load-more"><i class="far fa-sync-alt"></i> Load more</div>
                </div>
                <form action="#" class="reviews-form">
                    <h4>Leave A Review</h4>
                    <p>Your Rating</p>
                    <div class="stars">
                        <label for="star1" value="1"><i class="fas fa-star f2"></i></label>
                        <input type="radio" value="1" name="star" id="star1">
                        <label for="star2"><i class="fas fa-star"></i></label>
                        <input type="radio" value="2" name="star" id="star2">
                        <label for="star3"><i class="fas fa-star"></i></label>
                        <input type="radio" value="3" name="star" id="star3">
                        <label for="star4"><i class="fas fa-star"></i></label>
                        <input type="radio" value="4" name="star" id="star4">
                        <label for="star5"><i class="fas fa-star"></i></label>
                        <input type="radio" value="5" name="star" id="star5">
                    </div>
                    <label for="textarea"><p>Your Review</p></label>
                    <textarea name="rw=review" class="form-control" id="textarea" cols="100" rows="7" placeholder="Write your review"></textarea>
                    <div class="send">
                        <input type="submit" class="btn load-more" value="Send"></input>
                    </div>
                </form>
            </div>
        </div>
        <div class="right">
            <div class="lesson-date">
                <div class="narx">
                    <div class="left">
                        <h4>$120 <strike>$120</strike></h4>
                    </div>
                    <div class="btn sale">30% Off</div>
                </div>
                <div class="btn buy"><i class="far fa-shopping-bag"></i> Buy</div>
                <ul>
                    <li>
                        <div><i class="fas fa-user"></i> Instructor</div>
                        <p>Janna Dark</p>
                    </li>
                    <li>
                        <div><i class="fad fa-book"></i> Lessons</div>
                        <p>25</p>

                    </li>
                    <li>
                        <div><i class="fad fa-users"></i> Students</div>
                        <p>167</p>
                    </li>
                    <li>
                        <div><i class="fas fa-users-class"></i> Groups</div>
                        <p>At-34-35</p>
                    </li>
                    <li>
                        <div><i class="fas fa-clock"></i> Duration</div>
                        <p>6 months</p>
                    </li>
                </ul>
                <h6 class="text">
                    Social Share
                </h6>
                <div class="footer-social">
                    <a href="#"> <i class="fab fa-telegram-plane"></i>
                    </a>
                    <a href="#"> <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#"> <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#"> <i class="fas fa-phone"></i>
                    </a>
                    <a href="#"> <i class="far fa-globe-americas"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection('')
