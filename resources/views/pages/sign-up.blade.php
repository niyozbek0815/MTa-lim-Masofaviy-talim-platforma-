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
                <h4>Sign-up</h4>
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
                <label for="name">Email</label>
                <input type="email" placeholder="Your-email" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Password</label>
                <input type="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" class="form-control">
            </div>
            <div class="form-group form-check">
                <input type="checkbox">
                <label for="">I agree with the</label>
                <a href="#">Terms of Service</a>
            </div>
            <div class="site-btn">Sign-in</div>
        </form>
    </div>


</div>
@endsection("content")
