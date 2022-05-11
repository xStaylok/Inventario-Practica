<?php

	require 'conexion.php';
  $conectar=con();
	$sql = "SELECT id, nombre, encargado, fecha_elaboracion, fecha_vencimiento, area, material, cantidad, codigo_barras, precio, marca, descripcion, estado  FROM productos WHERE activo=1";
	$resul = mysqli_query($conectar , $sql);
  


?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventario</title>
      <script src="js/jquery-3.6.0.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.dataTables.min.js"></script>
      <script>
      		$(document).ready(function() {
    			$('#tabla').DataTable();
			} );
      </script>

      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/jquery.dataTables.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
  </head>
<body>
<div class="container">  
    <div class="row">   
        <h1>Inventario</h1>
    </div>

  		<table id="tabla" class="display" style="width:100%">
        	<thead>
           		 <tr>
                	<th>Nombre</th>
                	<th>Encargado</th>
                	<th>Fecha de elaboración</th>
                	<th>Fecha de vencimiento</th>
                	<th>Área</th>
                	<th>Material</th>
                	<th>Cantidad</th>
                	<th>Código de barras</th>
                	<th>Precio</th>
                	<th>Marca</th>
                	<th>Descripción</th>
                	<th>Estado</th>
            	</tr>
        	</thead>
        		<tbody>

        		<?php while($fila = $resul->fetch_assoc()){ ?>
        		
            		<tr>
                		<td><?php echo $fila['nombre']; ?></td>
                		<td><?php echo $fila['encargado']; ?></td>
                		<td><?php echo $fila['fecha_elaboracion']; ?></td>
                		<td><?php echo $fila['fecha_vencimiento']; ?></td>
                		<td><?php echo $fila['area']; ?></td>
                		<td><?php echo $fila['material']; ?></td>
                		<td><?php echo $fila['cantidad']; ?></td>
                		<td><?php echo $fila['codigo_barras']; ?></td>
                		<td><?php echo $fila['precio']; ?></td>
                		<td><?php echo $fila['marca']; ?></td>
                		<td><?php echo $fila['descripcion']; ?></td>
                		<td><?php echo $fila['estado']; ?></td>
                		<td><a href="editar.php?id=<?php echo $fila['id']; ?>" class="btn btn-warning">Editar</a> </td>
                		<td><?php echo $fila['id']; ?></td>

            		</tr>
            <?php  } ?>

            	</tbody>
        </table>
</div>




</body>
</html>