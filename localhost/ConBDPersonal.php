<?php 
    try {
        $conn = mysqli_connect("localhost", "root", "", "kaiserabmpersonal");  /*la variable $con es donde se almacena la base de datos */
      } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage()); /*finaliza el proceso y muestra el error */
      }
?>