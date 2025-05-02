const imagendefecto = 'img/logo pajaros.jpg';
const file=document.getElementById('cambiar_foto');
const videoInput = document.getElementById('cambiar_video');
const videoPreview = document.getElementById('video_preview');
const img= document.getElementById('img');


file.addEventListener('change', e=>{
    if(e.target.files[0]){
        //objeto de js para leer archivos del lado del cliente
        const reader= new FileReader();
        reader.onload=function(e){
        img.src=e.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);
    }else{
        img.src=imagendefecto;
    }
});

videoInput.addEventListener('change', e => {
    console.log('Evento change detectado');
    if (e.target.files[0]) {
        console.log('Archivo seleccionado:', e.target.files[0]);
        // Crear un objeto FileReader para leer archivos del lado del cliente
        const reader = new FileReader();
        reader.onload = function (event) {
            console.log('reader onload ejecutado');
            console.log('Archivo leído:', event.target.result);
            // Establecer la fuente del video al resultado de la lectura del archivo
            videoPreview.src = event.target.result;
            console.log('src del video:', videoPreview.src);
            videoPreview.load(); // Cargar el nuevo video
            console.log('video load ejecutado');
        }
        reader.readAsDataURL(e.target.files[0]);
    } else {
        // Si no hay archivo, establecer la fuente del video a un valor por defecto
        console.log('No se seleccionó ningún archivo, volviendo al video por defecto');
        videoPreview.src = 'img/nacho.mp4'; // Puedes cambiar esto a la ruta de un video por defecto
        videoPreview.load();
    }
});