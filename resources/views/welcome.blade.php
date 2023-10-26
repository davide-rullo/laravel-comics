@extends('layouts.app')


@section('content')
<div class="jumbo">

</div>
<div class="wrap">
    <div class="content d-flex align-items-center">
        <div class="container">

            <h3 class="title mb-3">CURRENT SERIES</h3>

            <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
                @foreach ($comics as $comic)
                <div class="col">
                    <img src="{{$comic['thumb']}}" class="imgcard" alt="">
                    <p>{{$comic['series']}}</p>
                </div>
                @endforeach

            </div>
            <div class="more-row d-flex justify-content-center align-items-center">
                <div class="more text-center">
                    <h6>LOAD MORE</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="links">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-4 col-lg-2">
                <div class="link-menu d-flex">
                    <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}">
                    <p>Digital comics</p>

                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2">
                <div class="link-menu d-flex">
                    <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}">
                    <p>Merchandise</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2">
                <div class="link-menu d-flex">
                    <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}">
                    <p>subscription</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2">
                <div class="link-menu d-flex">
                    <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}">
                    <p>Comic shop locator</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2">
                <div class="link-menu d-flex">
                    <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}">
                    <p>DC power Visa</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection