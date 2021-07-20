<html>

<head>
  <title>Modificacion</title>
  <link rel="stylesheet" href="assets/css/Modificar.css">
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

  <?php

  $conexion = mysqli_connect("localhost", "root", "", "mivalle") or die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from servicio where id='$_REQUEST[id]'") or die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    ?>
<div class="Seccion">
    <form action="modificar2.php" method="post">
      <label>Ingrese la modificacion</label> <br>
      <br>
      <input type="text" name="idnuevo" value="<?php echo $reg['id'] ?>">
      <br>
      <input type="text" name="nombrenuevo" value="<?php echo $reg['nombre'] ?>">
      <br>
      <input type="text" name="direccionnuevo" value="<?php echo $reg['direccion'] ?>">
      <br>
      <input type="text" name="descripcionnuevo" value="<?php echo $reg['descripcion'] ?>">
      <br>
      <input type="text" name="fechanuevo" value="<?php echo $reg['fecha'] ?>">
      <br>
      <input type="hidden" name="mailviejo" value="<?php echo $reg['id'] ?>">
      <input type="submit" value="Modificar">
    </form>
    </div">
  <?php
  } else
    echo "No existe alumno con dicho mail";
  ?>
</body>

</html>