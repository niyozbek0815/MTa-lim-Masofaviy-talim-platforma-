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
    @livewire('mudir-create-lesson')

    @endsection
