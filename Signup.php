<?php 
    require 'localhost/connectbd.php';
    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {  /*si los campos recibidos no estan vacios en los input, */
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)"; /* crea una variable sql y los agrega a la base datos*/
        $stmt = $con->prepare($sql); /* crea variable stmt y hace que la coneccion ejecute la consulta*/
        $stmt->bindParam(':email', $_POST['email']); /*vincula los parametros de email en lo que se recibe en el input de email */
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); /*encrita la contraseña */
        $stmt->bindParam(':password', $password); /*vincula la contraseña el parametro contraseña con la ingresada y encriptada */
  
    if ($stmt->execute()) {
        $message = 'Usuario creado exitosamente'; /*se ejecuto correctamente  */
        header('Location: login.php');
    } else {
        $message = 'Error al crear usuario';
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
    <script src="validatepass.js"></script>
</head>

<body>
    <div class="signupform">
       <div><h2>SignUp</h2></div>
       <div><span>or <a href="login.php">login</a></span></div>

    <form action="signup.php" method="post">
        <div><input type="text" name="email" placeholder="enter your email"></div>
        <div><input type="password" name="password" id="password"placeholder="enter your password"></div>
        <div><input type="password" name="confirm_password" id="confirm_password" placeholder="confirm your password"></div>
        <div><button type="submit" name="sendlg" value="Send"><p>Send</p></button></div>
    </form>

    </div>
</body>
</html>