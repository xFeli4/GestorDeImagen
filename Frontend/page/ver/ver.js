window.onload=()=>{
    obtenerImagen()
}
async function obtenerImagen(){
let url = "http://localhost/GestordeImagen/Backend/Controlador/controlador.php?funcion=obtenerimagen";
let respuesta = await fetch(url);
let imagenes = await respuesta.json();
verImagen(imagenes);
return imagenes;
}

function verImagen(imagenes){
let listaImagenes = document.querySelector("#imagenes");
imagenes.forEach(Imagen => {
    listaImagenes.innerHTML += `
   <div>
   <p>${Imagen.nombre}</p>
   <img src="../../imagenes/${Imagen.id}.${Imagen.extension}">
   </div> 
    `;
    
});
}
    
