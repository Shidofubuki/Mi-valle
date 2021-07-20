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
       <a href="index.php">Regresar</a>
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
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "mivalle") or die("Problemas con la conexión");

    mysqli_query($conexion, "update servicio set nombre='$_REQUEST[nombrenuevo]', direccion='$_REQUEST[direccionnuevo]', descripcion='$_REQUEST[descripcionnuevo]', fecha='$_REQUEST[fechanuevo]'") or die("Problemas en el select:" . mysqli_error($conexion));
    echo "El servicio fue modificado con exito";
    ?>
</div>

</body>

</html>