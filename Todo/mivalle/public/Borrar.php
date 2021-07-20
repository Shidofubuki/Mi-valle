<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminacion de servicio</title>
    <link rel="stylesheet" href="assets/css/borrar.css">
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

        <div id="divconsuta" class="Seccion">
        <br>
        <div id="div2" >
        <div id="div4" >
        <form name="formulario" role="form" method="Post">
        <div class="col-md-12">
        <strong class="igris">Ingrese criterio de busqueda</strong>
        <br> <br>
        <div class="form-row">
        <div class="form-group col-md-5">
        <input class="form-control" type="number" name="id" min="1" max="9999999999999999" value ="" placeholder="IDENTIFICACION"/>
        </div>
        <div class="form-group col-md-3">
        <input class="btn btn primary" type="submit" value="Eliminar" >
        </div>
        </div>
        <br>
        </div>
     </form>
        <br>
   </div>

        <div id="divconsulta2">

        <?php     

         if ($_SERVER ['REQUEST_METHOD']==='POST') 
         {
            include('Funciones.php');
            $vnumid=$_POST['id'];
            $miconexion=conectar_bd ('','Crud');
            $resultado=consulta ($miconexion, "select * from servicio where id='{$vnumid}'"); 
            $resultado2=consulta ($miconexion, "delete from servicio where id='{$vnumid}'"); 

                              if ($resultado->num_rows>0) 
                              {
                                  $fila = $resultado -> fetch_object();

                                  echo $fila ->id." ".$fila ->nombre." ".$fila->direccion." ".$fila ->descripcion." ".$fila ->fecha."<br>";       

                                  if ($resultado2) 
                                      echo "<br> Datos borradores exitosamente";
                                  } 
                                  else {
                                      echo "No exiten registros";
                                  }
                                  $miconexion ->close();
                           }?>
                     </div>
               </div>
          </div>
</body>
</html>