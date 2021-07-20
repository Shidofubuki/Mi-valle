<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de servicio</title>
    <link rel="stylesheet" href="assets/css/Consulta.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/Simbolo tu valle.png">
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

    <div id="divconsulta" class="Seccion">
    <br>
    <div id="div2"> 
    <img src="assets/img/favicons/Simbolo tu valle.png" width="200">
        <div id="div4">
        <form name="formulario" role="form" method ="post"">
            <div class="col-md-12">
                <strong class="igris">Ingrese criterio de busqueda</strong>
                <br> <br>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <input class="form-control" type="numer" name="id" min="9999" max="999999999999999" value="" placeholder ="IDENTIFICACION"/>
                    </div>

                    <div class="form-group col-md-3">
                        <input class="form-control" style="text-transform: uppercase;" type="text" name="nombre"  value="" placeholder ="NOMBRES"/>
                    </div>

                    <div class="form-group col-md-3">
                        <input class="form-control" style="text-transform: uppercase;" type="text" name="direccion"  value="" placeholder ="DIRECCION"/>
                    </div>

                    <div class="form-group col-md-3">
                        <input class="form-control" style="text-transform: uppercase;" type="text" name="descripcion"  value="" placeholder ="DESCRIPCION"/>
                    </div>

                    <div class="form-group col-md-3">
                        <input class="form-control" style="text-transform: uppercase;" type="text" name="fecha"  value="" placeholder ="FECHA"/>
                    </div>

                    <div class="form-group col-md-3">
                        <input class="consu" type ="submit" value="Consultar" >
                    </div>
                </div>
                <br>
            </div>
        </form>
        <br>
</div>
        <div id="divconsultas2">
        <?php
        if ($_SERVER ['REQUEST_METHOD']==='POST') 
        {
        include('Funciones.php');
        $vid=$_POST['id'];
        $vnombre=$_POST['nombre'];
        $vdireccion=$_POST['direccion'];
        $vdescripcion=$_POST['descripcion'];
        $vfecha=$_POST['fecha'];

        $miconexion=conectar_bd ('','mivalle');
        $resultado=consulta ($miconexion, "select * from servicio where trim(id) like '%{$vid}%' and (trim(nombre like '%{$vnombre}%' and trim(direccion) like '%{$vdireccion}%' and trim(descripcion) like '%{$vdescripcion}%' and trim(fecha) like '%{$vfecha}%' ))"); 
                        if($resultado->num_rows>0)
                        {
                            while ($fila = $resultado ->fetch_object())
                            {
                                echo $fila ->id." ".$fila ->nombre." ".$fila->direccion." ".$fila ->descripcion." ".$fila ->fecha."<br>";         
                            }
                                    }
                        else {
                                echo "No existen registros";
                                }
                        $miconexion -> close ();                       
    }?>
</div>
</div>
</div>
</body>
</html>