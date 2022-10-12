<?php
    session_start(); /*iniciamos la seccion */
    require 'localhost/connectbd.php'; /*llama a la coneccion  */
    if (isset($_SESSION['user_id'])) { /*si existe la variable seccion  */
        $records = $con->prepare('SELECT id, email, cargo, password FROM users WHERE id = :id'); /*se hace una consulta para los demas datos */
        $records->bindParam(':id', $_SESSION['user_id']); /*se vinculan los parametros de id */
        $records->execute(); /*se ejecuta */
        $results = $records->fetch(PDO::FETCH_ASSOC); /*se almacena la consulta */
        $user = null; /*se crea una variable  */
    if (count($results) > 0) { /* */
      $user = $results;  /*se almacenan los resultados en user */
    }
    }
?>