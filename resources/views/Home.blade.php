@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators"><!--her bir slide için indicator belirliyoruz-->
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <div class="carousel-inner"><!--carouselin içinde bulunacak itemları, resimleri barındıracak olan class-->
                    <div class="carousel-item active">
                        <img src="{{asset('images/cake.png')}}">
                    </div>

                    <div  class="carousel-item"><!--DON'T FORGET TO ADD SLIDER CAPTIONS-->
                        <img src="{{asset('images/cookie.png')}}">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/dessert.png')}}">

                    </div>

                </div>
                <div class="carousel-title">
                    <h2>Château de Sweets</h2>
                    <h4>Aklınızda değil, damağınızda kalsın.</h4>
                </div>

                <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="after-carousel">
        <h2>Hoş Geldiniz!</h2>
        <p>
            1969'dan beri aynı tutkuyla üretiyor, her lokmada mutluluk sunuyoruz.
            En taze malzemelerle hazırlanan pastalarımız, kurabiyelerimiz ve tatlılarımızla
            “Château de Sweets” farkını keşfedin.
        </p>
    </div>

@endsection

