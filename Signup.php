<?php 
    session_start();
    require 'localhost/connectbd.php';
        if (isset($_SESSION['user_id'])) {
        $records = $con->prepare('SELECT id, email, password FROM users WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        $user = null;
        if (count($results) > 0) {
        $user = $results;
        }
    }
    require 'localhost/connectbd.php';
    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);
  
    if ($stmt->execute()) {
        $message = 'Usuario creado exitosamente';
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