<?php

	include_once('conexion.php');

	$nombre=$_POST['nombre'];
	$encargado=$_POST['encargado'];
   	$fecha_elaboracion=$_POST['fecha_elaboracion'];
   	$fecha_vencimiento=$_POST['fecha_vencimiento'];
   	$area=$_POST['area'];
   	$material=$_POST['material'];
   	$cantidad=$_POST['cantidad'];
   	$codigo_barras=$_POST['codigo_barras'];
   	$precio=$_POST['precio'];
   	$marca=$_POST['marca'];
   	$descripcion=$_POST['descripcion'];
   	$estado=$_POST['estado'];
   
   
    echo "Los datos son los siguientes: <br>";
    echo "$nombre, $encargado, $fecha_elaboracion, $fecha_vencimiento, $area, $material, $cantidad, $codigo_barras, $precio, $marca, $descripcion y $estado";

   $conectar=conn(); //ejecuta las conexiones a la base de datos
   $sql="INSERT INTO productos (nombre, encargado, fecha_elaboracion, fecha_vencimiento, area, material, cantidad, codigo_barras, precio, marca, descripcion, estado, activo) VALUES('$nombre', '$encargado', '$fecha_elaboracion', '$fecha_vencimiento', '$area', '$material', '$cantidad', '$codigo_barras', '$precio', '$marca', '$descripcion', '$estado', 1)";
   $resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error:  ".mysqli_error($conectar), E_USER_ERROR);

   //echo "$sql";


   if($resul>0){
    echo 'REGISTRO AGREGADO';
   } else {
    echo 'ERROR AL AGREGAR REGISTRO';
   }


?>