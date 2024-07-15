<?php
require_once  '../Conexion/conexion.php';

class imagen
{
    public function agregarimagen($nombre, $imagen)
    {
        $connection = conection();
        $rutaTemporal = $imagen['tmp_name'];
        $nombreImagen = $imagen['name'];
        $extension = pathinfo($nombreImagen, PATHINFO_EXTENSION);
        $sql = "INSERT INTO imagen(nombre, extension) VALUES('$nombre', '$extension')";
        $respuesta = $connection->query($sql);
        $id = $connection->insert_id;
        move_uploaded_file($rutaTemporal,"../../Frontend/imagenes/$id.$extension");
        return $respuesta;
    }

    public function obtenerimagen()
    {
        $connection = conection();
        $sql = "SELECT * FROM imagen";
        $respuesta = $connection->query($sql);
        $imagen = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $imagen;
    }
}
