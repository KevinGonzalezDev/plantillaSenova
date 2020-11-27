@extends('layout.general')

@section('content')

    <img src="{{ asset('img/templates/banner/home.jpg')}}" alt="Home Banner" id="home-banner" id="banner">

    <div class="flex-row-wrap-center main-container">


        @foreach( $datos['info'] as $d)
        <div class="block-category">

            <!-- MASCARA DE IMAGEN -->
                <span>
                    <img src="{{ asset('img/templates/home/category1.jpg')}}" alt="category image">
                    <span class="orange-filter"></span>
                </span>

            <div>


                <div class="button-text">
                    <h2>{{$d->nombre}}</h2>
                    <p>{{$d->texto_descriptivo}}</p>
                    <a href="{{ route('micrositioVideo',['id'=>$d->id]) }}">VER MÁS</a>
                </div>

            </div>


        </div>
        @endforeach


    </div>

@endsection
