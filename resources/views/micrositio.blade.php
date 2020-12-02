@extends('layout.general')

@section('content')
    @foreach( $datos['micrositio'] as $d)
    <img src="{{ asset('img/templates/home/'.$d->img_banner)}}" alt="Home Banner" id="home-banner" id="banner">
    @endforeach
    <div class="flex-row-wrap-center main-container">


        @foreach( $datos['info'] as $d)
        <div class="block-category">

            <!-- MASCARA DE IMAGEN -->
                <span>
                    <img src="{{ asset('img/templates/content/'.$d->imagen)}}" alt="category image">
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
