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



        <form  method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="login" >Login</label>
                <input id="text" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
                    @error('login')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="password" >{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>
            <div class="form-group form-check check-form">
                <div class="div">
                        <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>

                    </div>

                    @if (Route::has('password.request'))
                    <a class="btn " href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
            <input type="submit" class="site-btn btn" style="width: 100%;border:none" value="{{ __('Login') }}">

        </form>
        <p class="create-text text2">Don't have an account? <a href="{{ route('register') }}">Sign-up</a></p>

    </div>


</div>

@endsection("content")
