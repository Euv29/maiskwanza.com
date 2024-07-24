var filtro = document.getElementById('order');
var maisr = document.getElementById('maisr');
var maisp = document.getElementById('maisp');
var maisa = document.getElementById('maisa');

filtro.onchange = function(){
    if(filtro.value == 1){
        maisr.classList.remove('off');
        maisp.classList.add('off');
        maisa.classList.add('off');
    }
    if(filtro.value == 2){
        maisp.classList.remove('off');
        maisr.classList.add('off');
        maisa.classList.add('off');
    }
    if(filtro.value == 3){
        maisa.classList.remove('off');
        maisp.classList.add('off');
        maisr.classList.add('off');
    }
}