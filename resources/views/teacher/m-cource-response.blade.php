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
    @livewire('mudir-create-lesson')


    @endsection
