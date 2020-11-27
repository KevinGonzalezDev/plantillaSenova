
const popUp = document.getElementById('popUp');
const botones = document.getElementsByClassName('MostrarPop');
const closeButton = document.getElementById('close');

let mostrar = false;

closeButton.addEventListener('click', function(){
    mostrar = false;
    console.log(mostrar);

    if(!mostrar){
        popUp.classList.remove('displayed');
    }
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
