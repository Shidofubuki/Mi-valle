<?php
include ('Funciones.php');
session_start ();
$_SESSION ['nusuario'] = $_POST ['correo'];
$_SESSION ['nclave'] = $_POST ['contraseña'];

$miconexion = conectar_bd (' ','mivalle');
$resultado = consulta ($miconexion, "select * from administrador where correo='{$_SESSION['nusuario']}' and contraseña= '{$_SESSION['nclave']}'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Menu Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Menu.css">
    <link rel="icon" href="assets/img/favicons/Simbolo tu valle.png">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<button>
    <a href="admin.php">Regresar</a>
</button>

    <div id="div1" class="Seccion">
        <br>
        <div id="div2">
            <?php if ($resultado ->num_rows>0) { ?> <img src="assets/img/favicons/Simbolo tu valle.png"width="200">
            <?php } ?>
            <div id="div3">
                <?php
                if ($resultado ->num_rows>0)
                {
                $fila = $resultado -> fetch_object(); 
                $_SESSION ['id']= $fila -> id;
                ?>
                <label class="Bien">Bienvenido <?php echo $_SESSION ['nusuario'] ?> </label>
                <br> 
                <br>
                <input style ="width: 40%" class ="btn btn-primary" type="button" onclick = "location.href = 'Registros.php'" value = "Registro de servicios">

                <input style ="width: 40%" class ="btn btn-primary" type="button" onclick = "location.href = 'Consulta.php'" value = "Consulta de Servicios">
                <br> <br>

                <input style ="width: 40%" class ="btn btn-primary" type="button" onclick = "location.href = 'Modificador.php'" value = "Actualizacion de Servicios">
                
                <input style ="width: 40%" class ="btn btn-primary" type="button" onclick = "location.href = 'Borrar.php'" value = "Borrar servicios">
                <br> <br>


                <?php
                }
                else
                {
                    echo "usuario o clave invalido";
                }
                $miconexion ->close ();
                ?>
                <br> <br>       

        </div>
    </div>
</div>  

</body>
</html>