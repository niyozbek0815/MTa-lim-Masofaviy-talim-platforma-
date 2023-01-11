@extends('layouts.app-pages')
@section("style")
<style>
    .send-response1 h4 {
    background-color: #fff;
    margin-bottom: 20px;
}

.send-response1 .card {
    padding: 0;
    margin: 3px 0;
}

.send-response1 .card h6 {
    font-size: 17px;
    font-weight: 600;
}

.send-response1 .card .cource-teacher {
    margin-top: 15px
}
</style>

@endsection

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
                <div class="search-text">
                    <h4>Dars uchun so'rov jo'natish</h4>
                </div>
            </div>

        </div>
    </div>
    <div class="site-container response-page1">
        <div class="send-response send-response1">
            <h4>My responce</h4>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae commodi magni dolorem quaerat minima. text to build on the card title and make up the bulk of the card's content.</p>

                    <div class="cource-teacher ">
                        <div class="teacher-profil ">
                            <a href="# ">
                                <img src="assets/img/user/01.png " alt=" "> Niyozbek
                            </a>
                        </div>
                        <div> <button type="button" class="btn btn-danger">Rad etish</button>
                            <button type="button" class="btn btn-success">Tasdiqlash</button></div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <div class="site-container response-page">
        <div class="cource-response">
            <h4>New Response</h4>
            <form action="#">
                <div class="form-group">
                    <label for="name">Lesson Name</label>
                    <input type="text" id="name" autofocus="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Kafedra nomi va gruxlar nomi va boshqalar</label>
                    <textarea name="content" id="content" cols="30" class="form-control" rows="10" placeholder="Kafedra nomi va gruxlarni kiritin "></textarea>
                </div>
            </form>
        </div>
        <div class="send-response">
            <h4>My responce Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque consectetur eligendi voluptatibus.</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus debitis qui placeat sequi rerum neque. Repellat ullam dolorem sed a expedita quos, est inventore doloremque excepturi odio reprehenderit aspernatur deleniti nulla pariatur
                necessitatibus recusandae vel sequi. Natus eum quasi culpa maxime commodi quisquam cum veritatis odit, quaerat id perspiciatis iste nesciunt, enim asperiores. Dolorem dolores possimus voluptates totam asperiores. Some quick example
                text to build on the card title and make up the bulk of the card's content.</p>

        </div>

    </div>

    @endsection
