<?php
  session_start();

    if (isset($_SESSION['user_id'])) {
      header('Location: /');
    }

  require 'localhost/connectbd.php'; /*coneccion con la base de datos*/

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = 'inicio seesion exitoso';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        header("Location: /index.php"); /* lugar a donde se redigiria al iniciar sesion*/
    } else {
        $message = 'Las credenciales no coinciden';
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content= "ie=edge chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K.A.B.M.</title>
    <link rel="stylesheet" href="style.css">
</head> <!--comentario-->
<body id="contenedor">
    <!--Menu-->
    <nav id="navegador">
        <h3 class="logo">Logo</h3>
        <h3 class="menu">Menu</h3>
        <h3 class="usuario">Bienvenido Usuario</h3>
    </nav>
    <header id="cabeza">
        <!--Encabezado-->
        <h2 class="imagen">imagen</h2>         
        <div class="loginform">
            <div> <h2>Login</h2></div>
          <form action="login.php" method="post">
          <div><input type="text" name="email" placeholder="enter your email"></div>
          <div><input type="password" name="password" placeholder="enter your password"></div>
          <div><button type="submit" name="sendlg" value="Send"><p>Send</p></button></div>
          </form>
          </div>
    </header>
    <main id="cuerpo">
        <!--Principal-->
        <h1 class="informacion-c">Informacion sobre la compañia</h1>
        <h1 class="m1">Marca 1</h1>
        <h1 class="m2">Marca 2</h1>
        <h2 class="informacion-r">Informacion y Requisitos</h2>
        <h2 class="formulario">Formulario de Datos del Usuario</h2>
    </main>
    <footer id="pie">
        <!--Pie de página-->
        <h3 class="conocer">Conocenos</h3>
        <h3 class="Pol-pri">Politica de Privacidad</h3>
        <h3 class="direccion">Direccion</h3>
        <h3 class="correo">Correo</h3>
        <h3 class="ter-con">Termino y Condiciones</h3>
        <h3 class="sucursales">Sucursales</h3>
    </footer>
</body>
</html>