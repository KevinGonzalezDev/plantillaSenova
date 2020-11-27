@extends('layout.general')

@section('content')
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
    @foreach( $datos['info'] as $d)
     <p><a href = "{{ route('micrositio',['id'=>$d->id]) }}">{{$d->nombre}}</a></p>
    @endforeach
@endsection
