@extends('layouts.app-pages')
@section('content')
<div class="search-hero-area">
    <div class="profil-hero-fon">
        <img src="{{ asset("assets/img/shape/shape-1.png") }}" alt="">
        <img src="{{ asset("assets/img/shape/shape-6.png") }}" alt="">
        <img src="{{ asset("assets/img/shape/shape-3.png") }}" alt="">
        <img src="{{ asset("assets/img/shape/shape-4.png") }}" alt="">
    </div>
    <div class="site-container">
        <div class="profil-area">
            <div class="search-text">
                <h4>Sign-in</h4>
            </div>
        </div>

    </div>
</div>

<div class="site-container sign-page">

    <div class="sign-block">
        <div class="header-logo">
            <img src="{{ asset("assets/img/logo/logo.png") }}" alt="" class="logo ">
            <span>M</span>
            <p>Ta'lim</p>
        </div>
        <p class="create-text">create your MTa'lim account</p>
        <form action="#">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" placeholder="Your-name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Password</label>
                <input type="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group form-check check-form">
                <div class="div"><input type="checkbox">
                    <label for="">I agree with the</label></div>

                <a href="#">Parolni unutdim</a>
            </div>
            <div class="site-btn">Sign-in</div>
        </form>
        <p class="create-text text2">Don't have an account? <a href="#">Sign-up</a></p>

    </div>


</div>

@endsection("content")
