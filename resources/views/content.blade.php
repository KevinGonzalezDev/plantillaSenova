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

        <div class="main-video-container">
            <iframe width="1242" height="529" src="https://www.youtube.com/embed/RDYeEJK4NbI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="flex-row-wrap-center videos-content">
          @foreach( $datos['videos'] as $d)
            <div class="video-block">

                <span>
                    <img src="{{ asset('img/templates/content/blockv1.png')}}" alt="block image">
                    <span class="orange-filter"></span>
                </span>

                <div>
                    <h2>{{$d->nombre}}</h2>

                    <img src="{{ asset('img/icons/play.png')}}" class="MostrarPop">

                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, autem?</p>
                        <button onClick = 'showVideo("{{$d->url}}")' >VER</button>
                    </div>

                </div>

            </div>

          @endforeach

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
    alert(alerta);
    document.getElementById('videoFrame').src = alerta;
    document.getElementById("popUp").classList.add('displayed');
  }
</script>
@endsection
