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
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <form  method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn site-btn">
                    {{ __('Send Password Reset Link') }}
                </button>
            </form>
        </div>


    </div>
@endsection("content")



