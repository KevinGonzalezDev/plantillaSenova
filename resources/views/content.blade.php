@extends('layout.general')

@section('content')

    <div class="main-container content-container">
        <div class="main-title-container">
            <h2>AGRÍCOLA</h2>            
            <span></span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, amet.</p>
        </div>

        <div class="main-video-container">
            <iframe width="1242" height="529" src="https://www.youtube.com/embed/RDYeEJK4NbI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="flex-row-wrap-center videos-content">

            <div class="video-block">

                <span>
                    <img src="img/templates/content/blockv1.png" alt="block image">
                    <span class="orange-filter"></span>
                </span>

                <div>
                    <h2>TITULO<br>AGRÍCOLA 1</h2>

                    <img src="img/icons/play.png">
                    
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, autem?</p>
                        <button class="MostrarPop">VER</button>   
                    </div>
                    
                </div>

            </div>

            <div class="video-block">

                <span>
                    <img src="img/templates/content/blockv1.png" alt="block image">
                    <span class="black-filter"></span>
                </span>

                <div>
                    <h2>TITULO<br>AGRÍCOLA 2</h2>

                    <img src="img/icons/play.png">
                    
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, autem?</p>
                        <button class="MostrarPop">VER</button>
                    </div>
                    
                </div>


            </div>

            <div class="video-block">

                <span>
                    <img src="img/templates/content/blockv1.png" alt="block image">
                    <span class="black-filter"></span>
                </span>

                <div>
                    <h2>TITULO<br>AGRÍCOLA 1</h2>

                    <img src="img/icons/play.png">
                    
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, autem?</p>
                        <button class="MostrarPop">VER</button>
                    </div>
                    
                </div>


            </div>

            <div class="video-block">

                <span>
                    <img src="img/templates/content/blockv1.png" alt="block image">
                    <span class="black-filter"></span>
                </span>

                <div>
                    <h2>TITULO<br>AGRÍCOLA 1</h2>

                    <img src="img/icons/play.png">
                    
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, autem?</p>
                        <button class="MostrarPop">VER</button>
                    </div>
                    
                </div>


            </div>

            <div class="video-block">

                <span>
                    <img src="img/templates/content/blockv1.png" alt="block image">
                    <span class="black-filter"></span>
                </span>

                <div>
                    <h2>TITULO<br>AGRÍCOLA 1</h2>

                    <img src="img/icons/play.png">
                    
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, autem?</p>
                        <button class="MostrarPop">VER</button>  
                    </div>
                    
                </div>


            </div>

            <div class="video-block">

                <span>
                    <img src="img/templates/content/blockv1.png" alt="block image">
                    <span class="black-filter"></span>
                </span>

                <div>
                    <h2>TITULO<br>AGRÍCOLA 1</h2>

                    <img src="img/icons/play.png">
                    
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, autem?</p>
                        <button class="MostrarPop">VER</button>  
                    </div>
                    
                </div>


            </div>
    </div>
</div>

    <!-- Modal video -->
    <!-- POPUP DEL VIDEO, aquí debería de llamarse cada vídeo con su correspondiente Id, de acuerdo
        al botón de "ver" al que se le de click, envia la id del vídeo
    -->
    <div id="popUp">
        <span id="close">X</span>
        <iframe width="1242" height="529" src="https://www.youtube.com/embed/ilTwo7zrQ6Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    

@endsection