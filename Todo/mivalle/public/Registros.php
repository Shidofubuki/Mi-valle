<html>

<head>
  <title>Registro</title>
  <link rel="stylesheet" href="assets/css/registro1.css">
  <link rel="icon" href="assets/img/favicons/Simbolo tu valle.png">

</head>

<body>
<nav class="navegacion">
    <li>
        <button>
        <a href="admin.php">Regresar</a>
        </button>   
        <button>
        <a href="Registros.php">Crear</a>
        </button>
        <button>
        <a href="Consulta.php">Consultar</a>
        </button>
        <button>
        <a href="Modificar.php">Modificar</a>
        </button>
        <button>
        <a href="Borrar.php">Borrar</a>
        </button>
    </li>
</nav>

<div class="Seccion">
<img src="assets/img/favicons/Simbolo tu valle.png"width="200">
<form action="Guardado.php" method="POST">
<label>Nombre del servicio</label> 
<input type="text" name="nombre" placeholder="Escriba el NOMBRE" required> <br>
<label>Direccion del servicio</label> 
<input type="text" name="direccion" placeholder=" Escriba la DIRECCION" required> <br>
<label>Descripcion del servicio</label> 
<input type="text" name="descripcion" placeholder="Escriba la DESCRIPCION" required> <br>
<label>Fecha del servicio</label> 
<input type="text" name="fecha" placeholder ="Escriba la FECHA" required> <br>
<input type="submit" value="Guardar">  
</form>
</div>
</body>

</html>