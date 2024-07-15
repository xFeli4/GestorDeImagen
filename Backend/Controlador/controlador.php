<?php

header('Access-Control-Allow-Origin: *');


require_once '../Modelo/modelo.php';

$funcion = $_GET['funcion'];

switch ($funcion) {
    case "agregarimagen":
        agregarimagen();
        break;

    case "obtenerimagen":
        obtenerimagen();
        break;

}

function agregarimagen()
{
    $nombre = $_POST['nombre'];
    $imagen = $_FILES['imagen'];
    $respuesta = (new imagen())->agregarimagen($nombre, $imagen);
    echo json_encode($respuesta);
}

function obtenerimagen()
{
    $respuesta = (new imagen())->obtenerimagen();
    echo json_encode($respuesta);
}
