<?php
  session_start();

    if (isset($_SESSION['user_id'])) {
        header('Location: /php/proyecto/main.php');
    }
  require 'dataconect.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = 'inicio seesion exitoso';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        header("Location: /php/proyecto/main.php");
    } else {
        $message = 'Las credenciales no coinciden';
    }
  }
?>