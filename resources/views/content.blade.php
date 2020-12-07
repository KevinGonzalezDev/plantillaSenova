@extends('layout.general')

@section('content')

    <div class="main-container content-container">
        <div class="main-title-container">
          @foreach( $datos['infoTematica'] as $d)
            <h2>{{$d->nombre}}</h2>
            <span></span>
            <p>{{$d->texto_descriptivo}}</p>
          @endforeach
        </div>
        @if( count($datos['videos']) == 1 )
        @foreach( $datos['videos'] as $d)
        <div class="main-video-container">
            <iframe width="1242" height="529" src="{{$d->url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        @endforeach
        @else


        <div class="flex-row-wrap-center videos-content">
          @foreach( $datos['videos'] as $d)
            <div class="video-block video-block-hover">

                <span class="video-block-hover">
                    <img src="{{ asset('img/templates/content/'.$d->imagen)}}" alt="block image">
                    <span class="filter black-filter"></span>
                </span>

                <div class="video-block-hover">
                    <h2 class="video-block-hover">{{$d->nombre}}</h2>

                    <img src="{{ asset('img/icons/play.png')}}" ">

                    <div class="video-block-hover">
                        <p class="video-block-hover">{{$d->texto_descriptivo}}</p>
                        @if( $d->embebido == true )
                        <button onClick = 'showVideo("{{$d->url}}")' class="video-block-hover">VER</button>
                        @else
                        <button onClick = "location.href='{{$d->url}}'" class="video-block-hover">VER</button>
                        @endif
                    </div>

                </div>

            </div>

          @endforeach
        @endif

    </div>
</div>

    <!-- Modal video -->
    <!-- POPUP DEL VIDEO, aquí debería de llamarse cada vídeo con su correspondiente Id, de acuerdo
        al botón de "ver" al que se le de click, envia la id del vídeo
    -->
    <div id="popUp">
        <span id="close">X</span>
        <iframe id="videoFrame" width="1242" height="529" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>


<script>
  function showVideo(alerta){
    document.getElementById('videoFrame').src = alerta;
    document.getElementById("popUp").classList.add('displayed');
  }
</script>
@endsection
