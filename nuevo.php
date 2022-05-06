<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventario</title>
      <script src="js/jquery-3.6.0.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
  </head>
<body>
<div class="container">  
    <div class="row">   
        <h1>Inventario de productos</h1>
    </div>

  <div class="row">
    <form id="registro" name="registro" method="POST" action="guardar.php" autocomplete="off">
      <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduzca el nombre" autofocus required>
      </div>

      <div class="form-group">
          <label for="encargado">Encargado</label>
          <input type="text" class="form-control" id="encargado" name="encargado" placeholder="Introduzca el encargado" required>
      </div>

      <div class="form-group">
          <label for="fecha_elaboracion">Fecha de elaboración</label>
          <input type="date" class="form-control" id="fecha_elaboracion" name="fecha_elaboracion" placeholder="Introduzca la fecha de elaboración" required>
      </div>

      <div class="form-group">
          <label for="fecha_vencimiento">Fecha de vencimiento</label>
          <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" placeholder="Introduzca la fecha de vencimiento" required>
      </div>

      <div class="form-group">
          <label for="area">Área</label>
          <input type="text" class="form-control" id="area" name="area" placeholder="Introduzca el Área" required>
      </div>

      <div class="form-group">
          <label for="material">Material</label>
          <input type="text" class="form-control" id="material" name="material" placeholder="Ingrese el material del producto" required>
      </div>

      <div class="form-group">
          <label for="material">Cantidad</label>
          <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Ingrese la cantidad" required>
      </div>

      <div class="form-group">
          <label for="codigo_barras">Código de barras</label>
          <input type="text" class="form-control" id="codigo_barras" name="codigo_barras" placeholder="Ingrese el código de barras" required>
      </div>

      <div class="form-group">
          <label for="precio">Precio</label>
          <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio del producto" required>
      </div>

      <div class="form-group">
          <label for="marca">Marca</label>
          <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese la marca del producto" required>
      </div>

      <div class="form-group">
          <label for="descripcion">Descripción</label>
          <input type="descripcion" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una descripción del producto" required>
      </div>

      <div class="form-group">
          <label for="estado">Estado</label>
          <select id="estado" name="estado" class="form-control" required>
              <option value="excelente">Excelente</option>
              <option value="bueno">Bueno</option>
              <option value="regular">Regular</option>
              <option value="deficiente">Deficiente</option>
              <option value="malo">Malo</option>
          </select>
      </div>
<br>
      <div class="form-group">
      <button class="form-control btn btn-success" id="guardar" name="guardar" type="submit">Guardar</button>

      </div>
    </form>
  </div>
</div>








  </body>
</html>
