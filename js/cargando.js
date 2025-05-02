document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('formulario').addEventListener('submit', function(event) {
        console.log("Formulario enviado");
        var cargando = document.getElementById('barra-cargando');
        if(cargando){
            console.log("barra encontrada");
            cargando.style.display = 'flex';
        }else{
            console.log("barra no encontrada");
        }
       
    });
});
