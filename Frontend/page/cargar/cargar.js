window.onload=()=>{
    enviarImagen();
}
    
async function enviarImagen(){
    let formElement = document.querySelector('#formulario');
    formElement.onsubmit= async (e)=>{
        e.preventDefault()
        
    let formData = new FormData(formElement);
    let url = "http://localhost/GestordeImagen/Backend/Controlador/controlador.php?funcion=agregarimagen";

    let config = {
        method: 'POST',
        body: formData
    }

    let respuesta = await fetch(url, config);
    let imagenes = await respuesta.json();
    console.log(imagenes);
    formElement.reset();
    }
}