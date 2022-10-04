<?php
    session_start(); /*se inicia la session */

    session_unset(); /*se quita o apaga la session */

     session_destroy();  /*se destruye o elimina la session */

    header('Location: historial.php'); 
?>