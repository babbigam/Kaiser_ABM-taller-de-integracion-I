<?php
  session_start();
    if (isset($_SESSION['user_id'])) {
      header('Location: ADatospersonales.php'); /*comprueba si ya existe una sesion y si es asi, lo re envia a datos personales */
    }

  require 'localhost/connectbd.php'; /*coneccion con la base de datos*/

    if (!empty($_POST['email']) && !empty($_POST['password'])) {  /*confirma que no esten vacios los input */
        $records = $con->prepare('SELECT id, email, password FROM users WHERE email = :email'); /*ejecutamos una consulta para obtener los datos del usuario */
        $records->bindParam(':email', $_POST['email']); /* vinculamos el parametro de email con lo que entrega el usuario */
        $records->execute(); /*ejecuta la consulta */
        $results = $records->fetch(PDO::FETCH_ASSOC); /*almacena la consulta en una variable llamada resultado */

    $message = 'inicio seesion exitoso';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) { /*verificar las contraseñas ingresadas en el input con la que se encuentra en la base de datos */
        $_SESSION['user_id'] = $results['id'];  /* almacena el id del usuario */
        header("Location: ADatosPersonales.php"); /* lugar a donde se redigiria al iniciar sesion*/
    } else {
      $message = 'Las credenciales no coinciden';
    }
  }
?>

<!Doctype html>
<html lang=en>
<head>
    <title>Portfolio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/stylelogin.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

  <div class="loginform">

    <div><h4>Iniciar sesion</h4></div>
 
    <form action="login.php" method="post">
      <div><input class="control" type="text" name="email" placeholder="Ingrese su correo"></div>
      <div><input class="control" type="password" name="password" placeholder="Contraseña"></div>
      <div><button class="boton" type="submit" name="sendlg" value="Send"><p>Ingresar</p></button></div>
    </form>

    <div><span><a href="Index.php">¿Olvidaste tu contraseña?</a></span></div>
    <div><span>o <a href="index.php">Contactenos</a></span></div>

  </div>
</body>
</html>