<?php
//conexion a la base de datos
$host="localhost";
$bd="sitio";
$usuario="root";
$contrasenia="1234";

try {
    $conexion=new PDO ("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
   
} catch ( Exception $ex) {

    echo $ex->getMessage();
  
}
?>
