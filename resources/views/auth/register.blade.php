@extends('layouts.app-pages')
@section('content')
    <div class="search-hero-area">
        <div class="profil-hero-fon">
            <img src="{{ asset('assets/img/shape/shape-1.png') }}" alt="">
            <img src="{{ asset('assets/img/shape/shape-6.png') }}" alt="">
            <img src="{{ asset('assets/img/shape/shape-3.png') }}" alt="">
            <img src="{{ asset('assets/img/shape/shape-4.png') }}" alt="">
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
                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="" class="logo ">
                <span>M</span>
                <p>Ta'lim</p>
            </div>
            <p class="create-text">create your MTa'lim account</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="login" >{{ __('Login') }}</label>
                        <input id="name" type="text" class="form-control @error('login') is-invalid @enderror"
                            name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
                        @error('login')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input id="email" type="email"
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password"
                        required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>


                    <input id="password-confirm" type="password" class="form-control"
                        name="password_confirmation" required autocomplete="new-password">
               </div>

                <div class="form-group form-check">
                    <input type="checkbox" required>
                    <label for="">I agree with the</label>
                    <a href="#">Terms of Service</a>
                </div>
                <button type="submit" style="width: 100%; border:none;" class="site-btn">
                    {{ __('Register') }}
                </button>
            </form>
        </div>


    </div>
@endsection("content")

