<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/main.css">
    <link rel="stylesheet" href="estilos/responsive.css">
    <title>Sennova</title>
</head>
<body>

    <header class="head-container menu-absolute">
        
        <div class="menu-container">
            <img src="img/icons/sennova.png" alt="Sennova logo" id="logo-sennova">

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

        <img src="img/icons/sennova.png" alt="Sennova logo" id="logo-sennova">

        <ul>
            <li class="list-title">ENLACES:</li>
            <li><a href="">Enlace1</a></li>
            <li><a href="">Enlace2</a></li>
            <li><a href="">Enlace3</a></li>
        </ul>

        <ul>
            <li class="list-title">CONTACTO:</li>
            <li>Correo:<br>email@senova.com</li>
            <li>Tel:<br>310 000 0000</li>
        </ul>

        <ul>
            <li class="list-title ">REDES:</li>
            <ul class="social-links">
                <li><a href=""><img src="img/icons/fb.png" alt="social icon"></a></li>
                <li><a href=""><img src="img/icons/ig.png" alt="social icon"></a></li>
                <li><a href=""><img src="img/icons/ld.png" alt="social icon"></a></li>
                <li><a href=""><img src="img/icons/tw.png" alt="social icon"></a></li>
            </ul>
        </ul>
    </div>

</body>
</html>