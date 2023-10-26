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
        </div>
    </div>
</div>
@endsection