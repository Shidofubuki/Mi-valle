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

<div class="Seccion">
  <form action="modificar1.php" method="post">
    <label>Ingrese la Id del servicio</label> <br>
    <br>
    <input type="text" name="id"><br>
    <br>
    <input type="submit" value="buscar">
  </form>
</div>
</body>

</html>