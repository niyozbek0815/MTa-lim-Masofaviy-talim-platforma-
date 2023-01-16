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
                    <h4>Edit Profile</h4>
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

            <form  method="POST"  action="{{ url('/profil-edit/save') }} "   enctype="multipart/form-data">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" required placeholder="Your-name" value="{{ Auth::user()->name }}"
                        name="name" class="form-control">
                </div>
                <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" required placeholder="Last Name" name="lname"
                        value="{{ Auth::user()->l_name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" id="login" required placeholder="Login" name="login"
                        value="{{ Auth::user()->login }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" required placeholder="+998900101099" name="phone"
                        value="{{ Auth::user()->phone }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" required placeholder="Email" name="email"
                        value="{{ Auth::user()->email }}" class="form-control">
                </div>

                @livewire('profil-edit')

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror"   autocomplete="current-password">
                </div>

                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="current-password">
                </div>
                <button type="submit" class="site-btn" style="border:none; width:100%">Save</button>
            </form>

        </div>


    </div>
@endsection("content")
