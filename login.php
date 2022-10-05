<?php
  session_start();

    if (isset($_SESSION['user_id'])) {
      header('Location: historial.php');
    }

  require 'localhost/connectbd.php'; /*coneccion con la base de datos*/

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $con->prepare('SELECT id, email, password FROM users WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = 'inicio seesion exitoso';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        header("Location: historial.php"); /* lugar a donde se redigiria al iniciar sesion*/
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
    <link rel="stylesheet" href="assets/css/style.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

  <div class="loginform">
    <div> <h2>Login</h2></div>
    <div><span>or <a href="Signup.php">SignUp</a></span></div>
    
    <form action="login.php" method="post">
      <div><input type="text" name="email" placeholder="enter your email"></div>
      <div><input type="password" name="password" placeholder="enter your password"></div>
      <div><button type="submit" name="sendlg" value="Send"><p>Send</p></button></div>
    </form>

    <div><span><a href="Index.html">Index</a></span></div>

  </div>
</body>
</html>