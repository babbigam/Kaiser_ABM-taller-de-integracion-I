<?php 
    require 'localhost/connectbd.php';
    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {  /*si los campos recibidos no estan vacios en los input, */
        $sql = "INSERT INTO users (email, password, cargo) VALUES (:email, :password, :cargo)"; /* crea una variable sql y los agrega a la base datos*/
        $stmt = $con->prepare($sql); /* crea variable stmt y hace que la coneccion ejecute la consulta*/
        $stmt->bindParam(':email', $_POST['email']); /*vincula los parametros de email en lo que se recibe en el input de email */
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); /*encrita la contraseña */
        $stmt->bindParam(':password', $password); /*vincula la contraseña el parametro contraseña con la ingresada y encriptada */
        $stmt->bindParam(':cargo', $_POST['cargo']);
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
    <link rel="stylesheet" href="assets/css/stylelogin.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="validatepass.js"></script>
</head>

<body>
    <div class="signupform">
       <div><h4>Registrar un usuario</h4></div>

    <form action="signup.php" method="post">
        <div><input class="control" type="text" name="email" placeholder="enter your email"></div>
        <div><input class="control" type="password" name="password" id="password" placeholder="enter your password"></div>
        <div><input class="control" type="password" name="confirm_password" id="confirm_password" placeholder="confirm your password"></div>
        <div><input class="control" list="cargos" type="list" name="cargo" placeholder="Cargo del usuario"></div>
            <datalist id="cargos">
                <option value="1">
                <option value="2">
                <option value="3">
            </datalist>

</select>
        <div><button class="boton" type="submit" name="sendlg" value="Send"><p>Registrar</p></button></div>
    </form>
       <div><span><a href="Tabladeusuario.php">Tabla de usuarios</a></span></div>
    </div>
</body>
</html>