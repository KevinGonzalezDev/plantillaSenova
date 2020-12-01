
const popUp = document.getElementById('popUp');
const botones = document.getElementsByClassName('MostrarPop');
const closeButton = document.getElementById('close');
const video = document.getElementById('videoFrame');

let mostrar = false;




closeButton.addEventListener('click', function(){
    mostrar = false;

    if(!mostrar){
        popUp.classList.remove('displayed');
    }

    video.src = "";
});

for(let i = 0; i < botones.length; i++){
    botones[i].addEventListener('click', function(){

        if(!mostrar){
            mostrar = true;
        }else{
            mostrar = false;
        }

        console.log(mostrar);

        if(mostrar){
            popUp.classList.add('displayed');
        }else{
            popUp.classList.remove('displayed');
        }

    })
}
