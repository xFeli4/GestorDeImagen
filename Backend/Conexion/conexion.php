<?php
function conection (){
    $host = "localhost";
    $usr = "root";
    $pass = "";
    $bd = "gestordeimagen";
    $puerto = 3306;
    $mysqli = new mysqli ($host, $usr, $pass, $bd, $puerto);
    return $mysqli;
}
?>
