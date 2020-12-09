<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('estilos/main.css')}}">
    <link rel="stylesheet" href="{{ asset('estilos/responsive.css')}}">
    <title>Sennova</title>
</head>
<body>

    <header @if(Request::url() == Route('raiz')) class="head-container menu-absolute" @else class="head-container" @endif>

        <div class="menu-container">
            <img src="{{ asset('img/icons/sennova.png')}}" alt="Sennova logo" id="logo-sennova">

            <nav>
                <ul>
                    <li><a href="#" class="selected">Actualizate aquí</a></li>
                    <li><a href="#">Programación en vivo</a></li>
                    <li><a href="#">Generalidades</a></li>
                </ul>
            </nav>
        </div>

    </header>

    @yield('content')


    <div class="main-footer-container main-container">

    <a href="{{route('raiz')}}"><img src="{{ asset('img/icons/sennova.png')}}" alt="Sennova logo" id="logo-sennova"></a>

        <ul>
            <li class="list-title">ENLACES:</li>
            <li><a href="http://sennova.senaedu.edu.co/">Sennova</a></li>
            <li><a href="http://revistas.sena.edu.co/">Portal de revistas Sena</a></li>
            <li><a href="https://www.sena.edu.co">SENA</a></li>
        </ul>

        <ul>
            <li class="list-title ">REDES:</li>
            <ul class="social-links">
                <li><a href="https://www.facebook.com/SENA/"><img src="{{ asset('img/icons/fb.png')}}" alt="social icon"></a></li>
                <li><a href="https://www.instagram.com/senacomunica/"><img src="{{ asset('img/icons/ig.png')}}" alt="social icon"></a></li>
                <li><a href="https://co.linkedin.com/school/servicio-nacional-de-aprendizaje-sena-/"><img src="{{ asset('img/icons/ld.png')}}" alt="social icon"></a></li>
                <li><a href="https://twitter.com/SENAComunica"><img src="{{ asset('img/icons/tw.png')}}" alt="social icon"></a></li>
            </ul>
        </ul>
    </div>


    <script src="{{ asset('jquery/jquery.js')}}"></script>
    <script src="{{ asset('js/popup.js')}}"></script>
<script src="{{ asset('js/hover-videos.js') }}"></script>

</body>
</html>
