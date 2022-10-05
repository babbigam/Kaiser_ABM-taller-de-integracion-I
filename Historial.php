<?php
    session_start(); /*iniciamos la seccion */
    require 'localhost/connectbd.php'; /*llama a la coneccion  */
    if (isset($_SESSION['user_id'])) { /*si existe la variable seccion  */
        $records = $con->prepare('SELECT id, email, password FROM users WHERE id = :id'); /*se hace una consulta para los demas datos */
        $records->bindParam(':id', $_SESSION['user_id']); /*se vinculan los parametros de id */
        $records->execute(); /*se ejecuta */
        $results = $records->fetch(PDO::FETCH_ASSOC); /*se almacena la consulta */
        $user = null; /*se crea una variable  */
    if (count($results) > 0) { /* */
      $user = $results;  /*se almacenan los resultados en user */
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css"> 
    <title>Historial</title>
</head>
<body id="contenedor">
    <div> <?php require "assets/menuaside.php" ?></div>
    <!--Menu-->
    <nav id="navegador">
        <h3 class="logo">Logo</h3>
        <h3 class="menu">Menu</h3>
        <h3 class="usuario">Usuario</h3>
    </nav>
    <header id="cabeza">
        <!--Encabezado-->
        <h2 class="imagen">imagen</h2>         
        <h2 class="nombre">Historial</h1>
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