<?php 
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'kaiserabmpersonal';
/*comprobar coneccion usando try */
    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);  /*la variable $con es donde se almacena la base de datos */
      } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage()); /*finaliza el proceso y muestra el error */
      }
?>