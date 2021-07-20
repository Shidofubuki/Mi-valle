<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuario (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Se a creado satifactoriamente';
    } else {
      $message = 'Nada intentalo de nuevo por favor';
    }
  }
?>

<?php

require 'database.php';

$message = '';

if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) {
  $sql = "INSERT INTO cliente (nombre, apellido, direccion, telefono) VALUES (:nombre, :apellido, :direccion, :telefono)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':nombre', $_POST['nombre']);
  $stmt->bindParam(':apellido', $_POST['apellido']);
  $stmt->bindParam(':direccion', $_POST['direccion']);
  $stmt->bindParam(':telefono', $_POST['telefono']);
  

  if ($stmt->execute()) {
    $message = 'Se a creado satifactoriamente';
  } else {
    $message = 'Nada intentalo de nuevo por favor';
  }
}
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarte</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/public/assets/Login/assets/css/style.css">
    <link rel="icon" href="assets/img/favicons/Simbolo tu valle.png">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <div class=Cuadro>
    <img src="/public/assets/img/favicons/Simbolo tu valle.png" width="90px">
    <h1>SignUp</h1>
    <span>or <a href="/public/login.php">Login</a></span>

    <form action="signup.php" method="POST">
      <input name="nombre" type="text" placeholder="Tu Nombre">
      <input name="apellido" type="text" placeholder="Tu Apellido">
      <input name="direccion" type="text" placeholder="Tu Direccion">
      <input name="telefono" type="text" placeholder="Tu Telefono">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <input type="submit" value="Submit">
    </form>
    </div>
  </body>
</html>
