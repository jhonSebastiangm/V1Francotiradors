function ajusta() {
    var horizontales = document.querySelectorAll("#graficos .horizontal"); 
    
    var elem = 0; 
    while(elem < horizontales.length) {
    horizontales[elem].style.transition = "background-size 3s ease-in-out 2s"; 
    horizontales[elem].style.backgroundSize = horizontales[elem].innerHTML+" 100%"; 
    elem++; 
    }; 
    
    }
    
    onload = ajusta; 