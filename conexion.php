<?php
// Configuracion necesaria para acceder a la base de datos.
function conn(){
$hostname = "localhost";    
$usuariodb = "root";
$passworddb = "";
$dbname = "inventario_practica";

// Generando la conexion con el servidor
$conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
return $conectar;
}



?>