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
            <div class="search-text">
                <h4>Dars uchun so'rov jo'natish</h4>
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
        <h4>My responce</h4>
        <div class="alert alert-primary" role="alert">
            <p>Lorem ipsum dolor sit.</p>
            <div class="div">
                <div class="btn-sm btn btn-outline-primary">Kutilayabdi</div>
                <button class="btn-sm btn btn-outline-primary"><i class="fa fa-trash-alt"></i></button>
            </div>
        </div>
        <div class="alert alert-danger" role="alert">
            <p>Lorem ipsum dolor sit.</p>
            <div class="div">
                <div type="button" class="btn-sm btn btn-outline-danger">Rad etildi</div>
                <button class="btn-sm btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
            </div>

        </div>
    </div>

</div>


@endsection

