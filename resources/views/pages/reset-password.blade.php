@extends('layouts.app-pages')
@section('content')
    <div class="search-hero-area">
        <div class="profil-hero-fon">
            <img src="assets/img/shape/shape-1.png" alt="">
            <img src="assets/img/shape/shape-6.png" alt="">
            <img src="assets/img/shape/shape-3.png" alt="">
            <img src="assets/img/shape/shape-4.png" alt="">
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
                <img src="assets/img/logo/logo.png" alt="" class="logo ">
                <span>M</span>
                <p>Ta'lim</p>
            </div>
            <p class="create-text">create your MTa'lim account</p>
            <form action="#">
                <div class="form-group">
                    <label for="name">Email or Phone</label>
                    <input type="text" placeholder="Email or Phone" class="form-control">
                </div>
                <div class="site-btn">Sign-in</div>
            </form>
        </div>


    </div>
@endsection("content")
