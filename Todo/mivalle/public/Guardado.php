<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="navegacion">
 
    <title>Ingresar datos de servicio</title>
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
include('Funciones.php');
$vnombre=$_POST ['nombre'];
$vdireccion=$_POST['direccion'];
$vdescripcion=$_POST['descripcion'];
$vfecha=$_POST['fecha'];

$miconexion=conectar_bd ('','mivalle');
$resultado=consulta ($miconexion,"insert into servicio (nombre, direccion, descripcion, fecha) VALUES ( '{$vnombre}', '{$vdireccion}', '{$vdescripcion}', '{$vfecha}')");

if ($resultado) {
    echo "Guardado Exitoso";
}
  
?>


</body>
</html>
