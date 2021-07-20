<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuario WHERE id = :id');
    $records->bindParam(':id', $_SESSION['id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $id = null;

    if (count($results) > 0) {
      $id = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/public/assets/Login/assets/css/style.css">
    <!-- <link rel="icon" href="assets/img/favicons/Simbolo tu valle.png"> -->
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($id)): ?>
      <br>  <h1>Bienvenido:</h1> <br> <?= $id['email']; ?> <br>
      <br><h3>Proceso satifactorio</h3>
      <a href="/public/index.php">Ir a la pagina</a> <br>
      <h3>Desconeptarce</h3> <br>
      <a href="/public/logout.php">Salir</a>
    
      </a>
    <?php else: ?>
      <h1>Please Login or SignUp</h1>

      <a href="login.php">Login</a> or
      <a href="signup.php">SignUp</a>
    <?php endif; ?>
  </body>
</html>