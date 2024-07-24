let icon = document.getElementById("colorMode");
icon.onclick = function(){
        document.body.classList.toggle("light-mode");
        if(icon.tagName == 'sunny'){
            icon.setAttribute('name', 'moon');
        }else{
            icon.setAttribute('name', 'sunny');
        }
}